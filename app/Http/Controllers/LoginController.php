<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public $name = 'izinusahasaranaperdagangan';
    public $redirect_uri = 'http://usahasarana.pplbandung.biz.tm/login_callback';
    public $client_id = 'rcQHD0QUT8xxg8Aj';
    public $client_secret = 'LRWXgkS867lPcs26';
    public $login = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=rcQHD0QUT8xxg8Aj&redirect_uri=http://usahasarana.pplbandung.biz.tm/login_callback&response_type=code';

    //test ke localhost
    public $name_local = 'saranaperdaganganlocalhost';
    public $client_id_local = 'ulP9hlsW74ahy2ND';
    public $redirect_uri_local = 'http://localhost:8000/login_callback';
    public $client_secret_local = 'JDPqeCpwEFUY6F4Q';
	public $login_local = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=ulP9hlsW74ahy2ND&redirect_uri=http://localhost:8000/login_callback&response_type=code';

    public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    public function login()
    {
        return view('izin.user.login');
    }

    public function call_back(Request $request)
    {
        $name = 'izinusahasaranaperdagangan';
        $redirect_uri = 'http://usahasarana.pplbandung.biz.tm/login_callback';
        $client_id = 'rcQHD0QUT8xxg8Aj';
        $client_secret = 'LRWXgkS867lPcs26';
        $login = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=rcQHD0QUT8xxg8Aj&redirect_uri=http://usahasarana.pplbandung.biz.tm/login_callback&response_type=code';

        //test ke localhost
        $name_local = 'saranaperdaganganlocalhost';
        $client_id_local = 'ulP9hlsW74ahy2ND';
        $redirect_uri_local = 'http://localhost:8000/login_callback';
        $client_secret_local = 'JDPqeCpwEFUY6F4Q';
        $login_local = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=ulP9hlsW74ahy2ND&redirect_uri=http://localhost:8000/login_callback&response_type=code';

        $code = $request->get('code',null);

        $client = new Client();
        $request = $client->createRequest('POST','http://dukcapil.pplbandung.biz.tm/oauth/access_token');
        $postBody = $request->getBody();
        $postBody->setField('grant_type','authorization_code');
        $postBody->setField('client_id',$client_id_local);
        $postBody->setField('client_secret',$client_secret_local);
        $postBody->setField('redirect_uri',$redirect_uri_local);
        $postBody->setField('code',$code);

        $response = $client->send($request);

        $body = $response->getBody();
        $body_json = json_decode($body);
        $access_token = $body_json->access_token;

        $client = new Client();
        $response = $client->get('http://dukcapil.pplbandung.biz.tm/api/penduduk/'.$access_token);
        $data = $response->getBody();

        $json = json_decode($data);
        $nama = $json->nama;

        DB::table('pengguna')->where('id',1)->update(['nama'=>$nama]);

        return view('izin.user.index');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
