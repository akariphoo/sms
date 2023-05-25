<?php 

/**
 * return view
 */
function viewPath($fileName, $data)
{
    return view($fileName, $data);
}

/**
 * to response json format
 *
 * @param string $status
 * @param string $msg
 * @param string $redirectUrl
 * @param integer $code
 * @return response with json
*/
if ( !function_exists('jsonResponse') ) {
    function jsonResponse($status, $msg, $redirectUrl=null, $code=200)
    {
        return response()->json([
            'status' => $status,
            'msg' => $msg,
            'redirectUrl' => $redirectUrl
        ], $code);
    }
}