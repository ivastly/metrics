<?php

namespace MeetMatt\Metrics\Server\Domain\Service;

use InvalidArgumentException;
use MeetMatt\Metrics\Server\Domain\Entity\User;
use MeetMatt\Metrics\Server\Domain\Repository\UserRepositoryInterface;

class RegistrationService
{
    /**
     * @var PasswordHashingServiceInterface
     */
    private $passwordHashingService;

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * @param PasswordHashingServiceInterface $passwordHashingService
     * @param UserRepositoryInterface         $userRepository
     */
    public function __construct(
        PasswordHashingServiceInterface $passwordHashingService,
        UserRepositoryInterface $userRepository
    )
    {
        $this->passwordHashingService = $passwordHashingService;
        $this->userRepository = $userRepository;
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @throws InvalidArgumentException
     *
     * @return User
     */
    public function register(string $username, string $password): User
    {
        $user = new User($username, $this->passwordHashingService->hashPassword($password));
        $this->userRepository->add($user);

        return $user;
    }
}