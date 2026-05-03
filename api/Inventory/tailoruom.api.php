<?php
class TailorUomApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["tailor_uoms"=>TailorUom::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["tailor_uoms"=>TailorUom::pagination($page,$perpage),"total_records"=>TailorUom::count()]);
	}
	function search($data){
		echo json_encode(["tailor_uoms"=>TailorUom::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["tailoruom"=>TailorUom::find($data->id)]);
	}
	function delete($data){
		TailorUom::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$tailoruom=new TailorUom();
		$tailoruom->abbr=$data->abbr;
		$tailoruom->name=$data->name;
		$tailoruom->inactive=$data->inactive;

		$tailoruom->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$tailoruom=new TailorUom();
		$tailoruom->id=$data->id;
		$tailoruom->abbr=$data->abbr;
		$tailoruom->name=$data->name;
		$tailoruom->inactive=$data->inactive;

		$tailoruom->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
