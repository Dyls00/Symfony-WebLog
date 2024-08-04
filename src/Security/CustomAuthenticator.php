<?php

namespace App\Security;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class CustomAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;
    private $userProvider;
    private $demandeurProvider;

    private UrlGeneratorInterface $urlGenerator;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(UrlGeneratorInterface $urlGenerator, UserProviderInterface $userProvider, UserProviderInterface $demandeurProvider)
    {
        $this->userProvider = $userProvider;
        $this->demandeurProvider = $demandeurProvider;
        $this->urlGenerator = $urlGenerator;
    }

    public function supports(Request $request): bool
    {
        return $request->isMethod('POST') && $request->request->has('email');
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        try {
            $user = $this->demandeurProvider->loadUserByIdentifier($email);
        } catch (AuthenticationException $e) {
            $user = $this->userProvider->loadUserByIdentifier($email);
        }

        if (!$user) {
            throw new CustomUserMessageAuthenticationException('Email could not be found.');
        }

        return new Passport(
            new UserBadge($email, function($userIdentifier) use ($user) {
                return $user;
            }),
            new PasswordCredentials($password),
            [new RememberMeBadge()]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // For example:
        return new RedirectResponse($this->urlGenerator->generate('app_dashbord'));
        throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
