<?php
$example_persons_array = [
	[
		'fullname' => 'Иванов Иван Иванович',
		'job' => 'tester',
	],
	[
		'fullname' => 'Степанова Наталья Степановна',
		'job' => 'frontend-developer',
	],
	[
		'fullname' => 'Пащенко Владимир Александрович',
		'job' => 'analyst',
	],
	[
		'fullname' => 'Громов Александр Иванович',
		'job' => 'fullstack-developer',
	],
	[
		'fullname' => 'Славин Семён Сергеевич',
		'job' => 'analyst',
	],
	[
		'fullname' => 'Цой Владимир Антонович',
		'job' => 'frontend-developer',
	],
	[
		'fullname' => 'Быстрая Юлия Сергеевна',
		'job' => 'PR-manager',
	],
	[
		'fullname' => 'Шматко Антонина Сергеевна',
		'job' => 'HR-manager',
	],
	[
		'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
		'job' => 'analyst',
	],
	[
		'fullname' => 'Бардо Жаклин Фёдоровна',
		'job' => 'android-developer',
	],
	[
		'fullname' => 'Шварцнегер Арнольд Густавович',
		'job' => 'babysitter',
	],
];

$n = 0;
$fullname = $example_persons_array[$n]['fullname'];
$surname = $example_persons_array[$n]['fullname'];
$name = $example_persons_array[$n]['fullname'];



//1.Разбиение ФИО
function getPartsFromFullname($fullname)
{
	$part1 = ['surname', 'name', 'patronomyc'];
	$part2 = explode(' ', $fullname);
	return array_combine($part1, $part2);
};

print_r(getPartsFromFullname($fullname));

/*
	if ($n == 0) return 0; 
	if (($n == 1) || ($n == 2)) { 
	 return 1; 
	} else { 
	 return fibo($n - 1) + fibo($n -2); 
	};
  };


//2.Объединение ФИО
/*function getFullnameFromParts($surname, $name, $patronymic) { 
	if ($n == 0) return 0; 
	if (($n == 1) || ($n == 2)) { 
	 return 1; 
	} else { 
	 return fibo($n - 1) + fibo($n -2); 
	};
  };*/



//3.Сокращение ФИО
//getShortName



//4.Определение пола по ФИО
//getGenderFromName



//5.Определение возрастно-полового состава
//getGenderDescription 



//6.Идеальный подбор пары
//getPerfectPartner 