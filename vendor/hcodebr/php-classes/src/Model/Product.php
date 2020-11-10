<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class Product extends Model {

	public static function listAll() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products ORDER BY idproduct DESC");

	}

	public static function listAll1() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 2 || idproduct = 3 || idproduct = 4 || idproduct = 5 || idproduct = 7 || idproduct = 8");

	}

	/*public static function listAll1() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 270 || idproduct = 299 || idproduct = 273 || idproduct = 300 || idproduct = 101 || idproduct = 274 || idproduct = 301 || idproduct = 243 || idproduct = 275 || idproduct = 304 || idproduct = 249 || idproduct = 276 || idproduct = 306 || idproduct = 256 || idproduct = 277 || idproduct = 308 || idproduct = 259 || idproduct = 278 || idproduct = 313 || idproduct = 262 || idproduct = 279 || idproduct = 314 || idproduct = 265 || idproduct = 280 || idproduct = 315 || idproduct = 266 || idproduct = 281 || idproduct = 316 || idproduct = 267 || idproduct = 284 || idproduct = 317 || idproduct = 268 || idproduct = 288 || idproduct = 318 || idproduct = 269 || idproduct = 294 || idproduct = 320");

	}

	public static function listAllPen() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 263 || idproduct = 264 || idproduct = 262 || idproduct = 261 || idproduct = 260 || idproduct = 259 || idproduct = 258 || idproduct = 257 || idproduct = 256");

	}

	public static function listAllMaisVendidos() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 15 || idproduct = 24 || idproduct = 27 || idproduct = 36 || idproduct = 46 || idproduct = 50 || idproduct = 81");

	}

	public static function listAllCanecas() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 270 || idproduct = 274 || idproduct = 273");

	}

	public static function listAllMenorTamanho() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct < 82");

	}

	public static function listAllMaiorTamanho() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct < 82 ORDER BY idproduct DESC");

	}

	public static function listAllPainelComum() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 100 AND idproduct < 210");

	}

	public static function listAllPainelCanto() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 209 AND idproduct < 227");

	}

	public static function listAllPainelRedondo() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 226 AND idproduct < 237");

	}

	public static function listAllPainelOval() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 236 AND idproduct < 243");

	}

	public static function listAllKitReplica() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 301 || idproduct = 302 || idproduct = 303");

	}

	public static function listAllAlbumEasy() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 242 AND idproduct < 249");

	}

	public static function listAllAlbumSanfonado() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 304 || idproduct = 305");

	}

	public static function listAllAlbumPlastico() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 249 AND idproduct < 256");

	}

	public static function listAllAlbumalbumScrapbook() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 306 || idproduct = 307");

	}

	public static function listAllAlbumFlat() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 307 AND idproduct < 313");

	}

	public static function listAllAlbumJanela() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 313");

	}

	public static function listAllAlbumMairaLombardi() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 314");

	}

	public static function listAllAlbumLinhaAcrilica() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 315");

	}

	public static function listAllCaixaCubinhos() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 281");

	}

	public static function listAllAlbumFotografica() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 316");

	}

	public static function listAllBox() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 265 || idproduct = 266 || idproduct = 267");

	}

	public static function listAllEstojoMaletaLuva() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct = 317 || idproduct = 318");

	}

	public static function listAllFotoIma() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 281 AND idproduct < 294");

	}

	public static function listAllFotoPvc() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 293 AND idproduct < 299");

	}

	public static function listAllLaminasAlbuns() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_products WHERE idproduct > 81 AND idproduct < 101");

	}*/

	public static function checkList($list) {

		foreach ($list as &$row) {

			$p = new Product();
			$p->setData($row);
			$row = $p->getValues();

		}

		return $list;

	}

	public function save() {

		$sql = new Sql();

		$results = $sql->select("CALL sp_products_save(:idproduct, :desproduct, :vlprice, :vlwidth, :vlheight, :vllength, :vlweight, :desurl)", array(
			":idproduct" => $this->getidproduct(),
			":desproduct" => $this->getdesproduct(),
			":vlprice" => $this->getvlprice(),
			":vlwidth" => $this->getvlwidth(),
			":vlheight" => $this->getvlheight(),
			":vllength" => $this->getvllength(),
			":vlweight" => $this->getvlweight(),
			":desurl" => $this->getdesurl(),
		));

		$this->setData($results[0]);

	}

	public function get($idproduct) {

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_products WHERE idproduct = :idproduct", [
			':idproduct' => $idproduct,
		]);

		$this->setData($results[0]);

	}

	public function delete() {

		$sql = new Sql();

		$sql->query("DELETE FROM tb_products WHERE idproduct = :idproduct", [
			':idproduct' => $this->getidproduct(),
		]);

		$img = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
		"res" . DIRECTORY_SEPARATOR .
		"site" . DIRECTORY_SEPARATOR .
		"img" . DIRECTORY_SEPARATOR .
		"products" . DIRECTORY_SEPARATOR .
		$this->getidproduct() . ".jpg";
		unlink($img);

	}

	public function checkPhoto() {

		if (file_exists(
			$_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
			"res" . DIRECTORY_SEPARATOR .
			"site" . DIRECTORY_SEPARATOR .
			"img" . DIRECTORY_SEPARATOR .
			"products" . DIRECTORY_SEPARATOR .
			$this->getidproduct() . ".jpg"
		)) {

			$url = "/res/site/img/products/" . $this->getidproduct() . ".jpg";

		} else {

			$url = "/res/site/img/product.jpg";

		}

		return $this->setdesphoto($url);

	}

	public function getValues() {

		$this->checkPhoto();

		$values = parent::getValues();

		return $values;

	}

	public function setPhoto($file) {

		$extension = explode('.', $file['name']);
		$extension = end($extension);

		switch ($extension) {

		case "jpg":
		case "jpeg":
			$image = imagecreatefromjpeg($file["tmp_name"]);
			break;

		case "gif":
			$image = imagecreatefromgif($file["tmp_name"]);
			break;

		case "png":
			$image = imagecreatefrompng($file["tmp_name"]);
			break;

		}

		$dist = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
		"res" . DIRECTORY_SEPARATOR .
		"site" . DIRECTORY_SEPARATOR .
		"img" . DIRECTORY_SEPARATOR .
		"products" . DIRECTORY_SEPARATOR .
		$this->getidproduct() . ".jpg";

		imagejpeg($image, $dist);

		imagedestroy($image);

		$this->checkPhoto();

	}

	public function getFromURL($desurl) {

		$sql = new Sql();

		$rows = $sql->select("SELECT * FROM tb_products WHERE desurl = :desurl LIMIT 1", [
			':desurl' => $desurl,
		]);

		$this->setData($rows[0]);

	}

	public function getCategories() {

		$sql = new Sql();

		return $sql->select("
			SELECT * FROM tb_categories a INNER JOIN tb_productscategories b ON a.idcategory = b.idcategory WHERE b.idproduct = :idproduct
			", [

			':idproduct' => $this->getidproduct(),
		]);

	}

	public static function getPage($page = 1, $itemsPerPage = 300) {

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_products
			ORDER BY desproduct
			LIMIT $start, $itemsPerPage;
			");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data' => $results,
			'total' => (int) $resultTotal[0]["nrtotal"],
			'pages' => ceil($resultTotal[0]["nrtotal"] / $itemsPerPage),
		];

	}

	public static function getPageSearch($search, $page = 1, $itemsPerPage = 10) {

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_products
			WHERE desproduct LIKE :search
			ORDER BY desproduct
			LIMIT $start, $itemsPerPage;
			", [
			':search' => '%' . $search . '%',
		]);

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data' => $results,
			'total' => (int) $resultTotal[0]["nrtotal"],
			'pages' => ceil($resultTotal[0]["nrtotal"] / $itemsPerPage),
		];

	}

}

?>