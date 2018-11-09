<?php
//打印表格
function priTable($res){
	if ($res != false) {
		$table = '<table style="border:1px solid black;"><tr>';
		//打印列
		$columns = array_keys($res[0]);
		foreach ($columns as $value) {
			$table .= '<th style="border:1px solid black;">' . $value . '</th>';
		}
		//打印行
		$table .= '</tr>';
		foreach ($res as $k => $v) {
			$table .= '<tr>';
			foreach ($v as $key => $val) {
				$table .= '<th style="border:1px solid black;">' . $val . '</th>';
			}
			$table .= '</tr>';
		}
		$table .= '</table>';

	} else {
		return false;
	}
	return $table;
}