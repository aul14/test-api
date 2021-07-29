<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }


    public function index()
    {
        // $data['result'] = json_decode($this->curl->simple_get('https://api.samrs.cloud/Asset/Test'), true);
        $this->load->view('dashboard');
    }

    public function view_data()
    {
        $result = json_decode($this->curl->simple_get('https://api.samrs.cloud/Asset/Test'), true);

        $data = [];
        foreach ($result['data'] as $key => $d) {
            $row = [];
            $row['null'] = '<input type="checkbox"  class="generate_checkbox" name="msg[]" value="' . $d['assetCode'] . '">';
            $row['no']          = ++$key;
            $row['assetCode']   = $d['assetCode'];
            $row['assetName']   = $d['assetName'];
            $row['merk']   = empty($d['propAssetPropgenit']['merk']) ? '-' : $d['propAssetPropgenit']['merk'];
            $row['tipe']   = empty($d['propAssetPropgenit']['tipe']) ? '-' : $d['propAssetPropgenit']['tipe'];
            $row['serialNumber']   =  empty($d['propAssetPropgenit']['serialNumber']) ? '-' : $d['propAssetPropgenit']['serialNumber'];
            $row['condition']   = empty($d['propAssetPropadmin']['condition']) ? '-' : $d['propAssetPropadmin']['condition'];
            $row['procureDate']   = empty($d['propAssetPropadmin']['condition']) ? '-' : $d['propAssetPropadmin']['condition'];
            $row['assetCatName']   = empty($d['propAssetCat']['assetCatName']) ? '-' : $d['propAssetCat']['assetCatName'];
            $row['ownershipType']   = empty($d['propAssetPropadmin']['ownershipType']) ? '-' : $d['propAssetPropadmin']['ownershipType'];
            $row['roomName']   = empty($d['propAssetPropadmin']['propAssetPropbuildingRoom']['roomName']) ? '-' : $d['propAssetPropadmin']['propAssetPropbuildingRoom']['roomName'];
            $row['floorName']   = empty($d['propAssetPropadmin']['propAssetPropbuildingRoom']['floorName']) ? '-' : $d['propAssetPropadmin']['propAssetPropbuildingRoom']['floorName'];
            $row['buildingName']   = empty($d['propAssetPropadmin']['propAssetPropbuildingRoom']['buildingName']) ? '-' : $d['propAssetPropadmin']['propAssetPropbuildingRoom']['buildingName'];

            $data[] = $row;
        }
        //merubah bentuk array ke bentuk json untuk datatables
        echo '{"draw":10,"recordsTotal":' . count($data) . ',"recordsFiltered":' . count($data) . ',"data":';
        echo json_encode($data);
        echo '}';
    }
}

/* End of file Dashboard.php */
