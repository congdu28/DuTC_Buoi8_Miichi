<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class CheckMaintenanceMode
{
    public function handle($request, Closure $next)
    {
        if (env('APP_MAINTENANCE_MODE')) {
            // Hệ thống đang trong chế độ bảo trì
            return response(('Hệ thống đang bảo trì. Vui lòng quay lại sau!'), 503);
        }

        // Hệ thống không trong chế độ bảo trì, tiếp tục xử lý yêu cầu
        return $next($request);
    }
}
