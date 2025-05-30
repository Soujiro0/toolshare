<?php

namespace App\Services;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Exception;

class AuthService
{
    protected $secret;
    protected $algorithm;

    public function __construct()
    {
        $this->secret = config('app.jwt_secret'); // or config('jwt.secret') if you make a separate config file
        $this->algorithm = 'HS256';
    }

    public function generateToken(string $userId, string $name, string $role): string
    {
        $issuedAt = time();
        $expire = $issuedAt + 3600;

        $payload = [
            'user_id' => $userId,
            'name' => $name,
            'role' => $role,
            'iat' => $issuedAt,
            'exp' => $expire,
        ];

        return JWT::encode($payload, $this->secret, $this->algorithm);
    }

    public function validateToken(string $token): object|false
    {
        try {
            return JWT::decode($token, new Key($this->secret, $this->algorithm));
        } catch (Exception $e) {
            return false;
        }
    }

    public function getBearerToken(Request $request): ?string
    {
        $authHeader = $request->header('Authorization');
        if ($authHeader && preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            return $matches[1];
        }
        return null;
    }
}
