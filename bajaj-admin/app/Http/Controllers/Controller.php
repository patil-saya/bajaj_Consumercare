<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Swagger(
 *     schemes={"http","https"},
 *     host="api.host.com",
 *     basePath="/",
 *     @OA\Info(
 *         version="1.0.0",
 *         title="Medic 24x7 App",
 *         description="REST API's for Medic24x7 application",
 *         termsOfService="",
 *         @OA\Contact(
 *             email="sayalib@leometric.com"
 *         ),
 *        
 *     ),
 *    @OA\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      in="header",
 *      name="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 *   ),
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
