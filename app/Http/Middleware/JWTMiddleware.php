<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Lcobucci\JWT\Exception;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $token = JWTAuth::getToken();
            if (!$token) {
                return response()->json(['message' => 'Authorization Token not found'], 401);
            }
            $user = JWTAuth::parseToken()->authenticate();

            if (empty($user)) {
                return response()->json(['code' => 401, 'status' => false, 'message' => 'User not found'], 401);
            }

            $request->merge(['user' => $user]);

        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException) {

                return response()->json(['status' => false, 'message' => 'Token is Invalid'], 401);

            } else if ($e instanceof TokenExpiredException) {

                return response()->json(['status' => false, 'message' => 'Token is Expired'], 401);

            }

            return response()->json(['status' => false, 'message' => 'Authorization Token not found'], 401);
        }
        return $next($request);
    }
}
