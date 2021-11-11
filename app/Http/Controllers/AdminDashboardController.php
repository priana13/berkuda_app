<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;


	use App\Models\CmsUser;
	use App\Models\Transaksi;


	class AdminDashboardController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "transaksi";
			# END CONFIGURATION DO NOT REMOVE THIS LINE        
	        
	    }



		public function getIndex(){

			$list_bulan = [1,2,3,4,5,6,7,8,9,10,11,12];

			$data['member'] = CmsUser::customer()->count();
			$data['transaksi'] = Transaksi::count();
			$data['nominal'] = Transaksi::sum('total');
			$transaksi_group_bulan = Transaksi::groupBulan()->get();

			

			foreach($list_bulan as $bulan){
				$data_transaksi = $transaksi_group_bulan->where('bulan',$bulan)->first();				
				if(is_null($data_transaksi->qty)){$qty=0;}else{$qty=$data_transaksi->qty;}

				$grafik_transaksi[] = $qty;
			}

			$data['grafik_transaksi'] = $grafik_transaksi;
			
			return view('admin.dashboard',$data);
		}


	}