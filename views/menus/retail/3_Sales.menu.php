<?php
	echo Menu::item([
		"id"=>"sales",
		"name"=>"Sales ",		
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"mdi mdi-grid-large menu-icon",
			"intellect"=>"fas fa-palette",
			"deskapp"=>"nav-icon fa fa-wrench",
			"ruangadmin"=>"far fa-solid fa-universal-access nav-icon",

		]),
		"route"=>"#order",
		"links"=>[
			["route"=>"order/create",
			"text"=>"Process New Sales",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"order",
			"text"=>"View Sales History",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"order",
			"text"=>"Invoice Generation",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"order",
			"text"=>"Returns/Refunds",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
		]
	]);
