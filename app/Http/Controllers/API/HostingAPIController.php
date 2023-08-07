<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIBaseController;
use Illuminate\Http\Request;

use Iodev\Whois\Factory;

use Illuminate\Support\Facades\Http;

class HostingAPIController extends APIBaseController
{

    /**
     * @OA\GET (
     *   path="/hosting-checker",
     *   summary="Get Hosting Data.",
     *   tags={"Hosting"},
     *   @OA\Response(
     *     response=200,
     *     description="Response.",
     *     @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     description="API title response.",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="descriptione",
     *                     description="API descriptione response.",
     *                     type="string"
     *                 )
     *                 ),
     *             ),
     *         ),
     *   ),
     * ),
     */

    ########### Get Data ############
    public function index()
    {
        $whois = Factory::get()->createWhois();
        $response = $whois->lookupDomain("3dmr.space");

        $data = explode("\n", $response->text);

        foreach ($data as $ind) {
            if (str_contains($ind, ':')) {
                list($k, $v) = explode(':', $ind);
                if (substr($v, -1) == 'r') {
                    $$v = substr($v, 0, -1);
                }
                $result[$k] = $v;
            }
            $re[$k] = $v;
        }

        $data = $re;

        $res = checkdnsrr("3dmr.space", "MX");
        $res  = dns_get_record(
            "3dmr.space",
            true
        );

        if (key_exists('ip', $res[0])) {
            $data['IP'] = $res[0]['ip'];
        }

        if (!$data) {
            return $this->sendError('Data not found');
        }

        return $this->sendResponse($data, 'Data retrieved successfully');
    }



    public function domain_checker(Request $request)
    {

        $request = $request->all();
        $domain = $request['domain'];

        if (str_contains($domain, 'https://')) {
            $domain = str_replace('https://', '', $domain);
        } elseif (str_contains($domain, 'http://')) {
            $domain = str_replace('http://', '', $domain);
        } elseif (str_contains($domain, 'www.')) {
            $domain = str_replace('www.', '', $domain);
        }

        if (substr($domain, -1) == '/') {
            $domain = substr($domain, 0, -1);
        }

        $whois = Factory::get()->createWhois();
        $response = $whois->lookupDomain($domain);

        $data = explode("\n", $response->text);
        $res = checkdnsrr($domain, "MX");
        $res  = dns_get_record(
            $domain,
            true
        );


        if (key_exists('ip', $res[0])) {
            $re['IP'] = $res[0]['ip'];

            $response = Http::get('http://ip-api.com/json/' . $res[0]['ip'], [
                'fields' => 'status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,hosting,query'
            ]);

            $api = $response->json();

            $re['city'] = $api['city'];
            $re['country'] = $api['country'];
            $re['lat'] = $api['lat'];
            $re['lon'] = $api['lon'];
            $re['isp'] = $api['isp'];
        }

        foreach ($data as $ind) {
            if (str_contains($ind, ':')) {
                list($k, $v) = explode(':', $ind);
                // if (substr($v, -1) == 'r') {
                //     $v = substr($v, 0, -1);
                // }
                if (!($k == 'Registrant Email')) {
                    $result[$k] = $v;
                }

                if ($k == 'DNSSEC') {
                    break;
                }
            }

            $re[$k] = $v;
        }

        $data = $re;

        $finalData = [];

        if (array_key_exists("isp", $data)) {
            $finalData['Hosting Provider']  = $data['isp'];
        }

        if (array_key_exists("IP", $data)) {
            $finalData['IP']  = $data['IP'];
        }

        if (array_key_exists("city", $data)) {
            $finalData['City']  = $data['city'];
        }

        if (array_key_exists("country", $data)) {
            $finalData['Country']  = $data['country'];
        }

        if (array_key_exists("Registrant Email", $data)) {
            $finalData['Email']  = $data['Registrant Email'];
        }

        if (array_key_exists("Registrant Phone", $data)) {
            $finalData['Phone']  = $data['Registrant Phone'];
        } else {
            $finalData['Phone']  = 'Not Available';
        }

        if (array_key_exists("Name Server", $data)) {
            $finalData['Name Server']  = $data['Name Server'];
        }

        if (array_key_exists("lat", $data)) {
            $finalData['lat']  = $data['lat'];
        }

        if (array_key_exists("lon", $data)) {
            $finalData['lon']  = $data['lon'];
        }

        if (!$finalData) {
            return $this->sendError('Data not found');
        }

        return $this->sendResponse($finalData, 'Data retrieved successfully');
    }
}
