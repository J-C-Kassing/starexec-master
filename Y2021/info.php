<?php
$title = 'Termination Competition 2021';
$shortname = 'TermCOMP 2021';
$showconfig = false;
$showscore = false;
$note = '';
$db = 'TPDB 11.2';
$closed = true;
$teams = [// List of teams.
	'RWTH Aachen' => ['AProVE','LoAT'],
	'HTWK Leipzig' => ['matchbox'],
	'U. Innsbruck' => ['TTT2', 'TcT'],
	'MU-TERM' => ['MuTerm'],
	'Berufsakademie Saarland' => ['MnM'],
	'U. de La Réunion' => ['NTI', 'NTI+cTI'],
	'Radboud U. Nijmegen' => ['Wanda', 'Ctrl'],
	'AIST' => ['NaTT'],
	'U. Freiburg' => ['Ultimate'],
	'LSV Cachan' => ['SizeChangeTool'],
	'U. Complutense de Madrid' => ['iRankFinder'],
	'Gumma U.' => ['SOL'],
];
$categories = [
	"Termination of Rewriting" => [
		'TRS Standard' => [
			'type' => 'termination',
			'id' => 47877,
			'spaceid' => 466107,
			'participants' => [
				"NTI" => 549724,
				"NaTT" => 552075,
				"TTT2" => 552234,
				"AProVE" => 551423,
				"MuTerm" => 326595,
			],
			'certified' => [
			'id' => 47875,
				'participants' => [
					"TTT2" => 552235,
					"AProVE" => 552179,
					"NaTT" => 552274,
				],
			],
		],
		'SRS Standard' => [
			'type' => 'termination',
			'id' => 47878,
			'spaceid' => 466081,
			'participants' => [
				"MuTerm" => 326595,
				"NaTT" => 552075,
				"TTT2" => 552234,
				"matchbox" => 550935,
				"AProVE" => 551423,
				"MnM" => 552513,
			],
			'certified' => [
				'id' => 47876,
				'participants' => [
					"TTT2" => 552235,
					"AProVE" => 552179,
					"NaTT" => 552278,
				],
			],
		],
		'TRS Relative' => [
			'type' => 'termination',
			'id' => 47871,
			'spaceid' => 466103,
			'participants' => [
				"NaTT" => 552075,
				"TTT2" => 552234,
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => 47872,
				'participants' => [
					"TTT2" => 552235,
					"AProVE" => 552179,
				],
			],
		],
		'SRS Relative' => [
			'type' => 'termination',
			'id' => 47874,
			'spaceid' => 466194,
			'participants' => [
				"NaTT" => 552075,
				"TTT2" => 552234,
				"matchbox" => 550934,
				"AProVE" => 551423,
				"MnM" => 552058,
			],
			'certified' => [
				'id' => 47873,
				'participants' => [
					"TTT2" => 552235,
					"AProVE" => 552179,
				],
			],
		],
		'TRS Equational' => [
			'type' => 'termination',
			'id' => 47879,
			'spaceid' => 466098,
			'participants' => [
				"MuTerm" => 163986,
				"NaTT" => 350520,
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => 47953,
				'participants' => [
					"AProVE" => 552179,
//					"NaTT" => 552357,
				],
			],
		],
		'TRS Conditional' => [
			'type' => 'termination',
			'id' => 47881,
			'spaceid' => 466363,
			'participants' => [
				"MuTerm" => 326595,
				"AProVE" => 551423,
			],
			'certified' => [
				'participants' => [
				],
			],
		],
		'TRS Context Sensitive' => [
			'type' => 'termination',
			'id' => 47882,
			'spaceid' => 466359,
			'participants' => [
				"MuTerm" => 163986,
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'TRS Innermost' => [
			'type' => 'termination',
			'id' => 47883,
			'spaceid' => 466200,
			'participants' => [
				"MuTerm" => 326595,
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => 47884,
				'participants' => [
					"AProVE" => 552179,
				],
			],
		],
		'TRS Outermost' => [
			'type' => 'termination',
			'id' => 47885,
			'spaceid' => 466242,
			'participants' => [
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => 47886,
				'participants' => [
					"AProVE" => 552179,
				],
			],
		],
		'HRS (union beta)' => [
			'type' => 'termination',
			'id' => 47887,
			'spaceid' => 466209,
			'participants' => [
				"SizeChangeTool" => 325830,
				"Wanda" => 359682,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
	],
	"Termination of Programs" => [
		'C' => [
			'type' => 'termination',
			'id' => 47888,
			'spaceid' => 466367,
			'participants' => [
				"AProVE" => 551429,
				"Ultimate" => 552352,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'C Integer' => [
			'type' => 'termination',
			'id' => 47889,
			'spaceid' => 466376,
			'participants' => [
				"Ultimate" => 552352,
				"iRankFinder" => 360226,
				"AProVE" => 551429,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Integer Transition Systems' => [
			'type' => 'termination',
			'id' => 47892,
			'spaceid' => 466219,
			'participants' => [
				"Ctrl" => 23757,
				"iRankFinder" => 360226,
				"LoAT" => 551398,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Integer TRS Innermost' => [
			'type' => 'termination',
			'id' => 47890,
			'spaceid' => 466410,
			'participants' => [
				"Ctrl" => 23758,
				"AProVE" => 551423,
			],
			'certified' => [
				'participants' => [
				],
			],
		],
		'Haskell' => [
			'spaceid' => 466206,
			'type' => 'termination',
			'id' => 47958,
			'participants' => [
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Java Bytecode' => [
			'spaceid' => 466222,
			'type' => 'termination',
			'id' => 47905,
			'participants' => [
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Java Bytecode Recursive' => [
			'spaceid' => 466352,
			'type' => 'termination',
			'id' => 47907,
			'participants' => [
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Logic Programming' => [
			'type' => 'termination',
			'id' => 47891,
			'spaceid' => 466183,
			'participants' => [
				"NTI+cTI" => 549725,
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Logic Programming with Cut' => [
			'spaceid' => 466237,
			'type' => 'termination',
			'id' => 47903,
			'participants' => [
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Prolog' => [
			'spaceid' => 466034,
			'type' => 'termination',
			'id' => 47904,
			'participants' => [
				"AProVE" => 551423,
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
	],
	'Complexity Analysis' => [
		'Complexity: C Integer' => [
			'spaceid' => 466341,
			'type' => 'complexity',
			'id' => 47893,
			'participants' => [
				"AProVE" => 551427
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Complexity: ITS' => [
			'spaceid' => 466146,
			'type' => 'complexity',
			'id' => 47894,
			'participants' => [
				"AProVE" => 552182
			],
			'certified' => [
				'id' => null,
				'participants' => [
				],
			],
		],
		'Derivational Complexity: TRS' => [
			'spaceid' => 466043,
			'type' => 'complexity',
			'id' => 47897,
			'participants' => [
				"TcT" => 360388,
				"AProVE" => 551421,
			],
			'certified' => [
				'id' => 47895,
				'participants' => [
					"TcT" => 360387,
				],
			],
		],
		'Derivational Complexity: TRS Innermost' => [
			'spaceid' => 466273,
			'type' => 'complexity',
			'id' => 47899,
			'participants' => [
				"TcT" => 360385,
				"AProVE" => 551421,
			],
			'certified' => [
				'id' => 47898,
				'participants' => [
					"TcT" => 360391,
				],
			],
		],
		'Runtime Complexity: TRS' => [
			'spaceid' => 466246,
			'type' => 'complexity',
			'id' => 47896,
			'participants' => [
				"TcT" => 360390,
				"AProVE" => 551428,
			],
			'certified' => [
				'id' => 47900,
				'participants' => [
					"TcT" => 360389,
				],
			],
		],
		'Runtime Complexity: TRS Innermost' => [
			'spaceid' => 466379,
			'type' => 'complexity',
			'id' => 47901,
			'participants' => [
				"TcT" => 360386,
				"AProVE" => 551428,
			],
			'certified' => [
				'id' => 47902,
				'participants' => [
					"TcT" => 360384,
					"AProVE" => 552179,
				],
			],
		],
	],
];
?>
