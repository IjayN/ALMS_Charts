<?php

namespace App\Http\Controllers\Bootsrap;

use App\Department;
use App\LeaveDays;
use App\Type;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class BootstrapController extends Controller
{


    public function index()
    {
        $this
            ->createDepartments();
        $this->createUserTypes();
        $this->createUsers();

        return "success";
    }

    public function createDepartments()
    {
        Department::create([
            'name' => 'Business Development,Administration,Finance,Health & Safety,Logistics,Sales'
        ]);
        Department::create([
            'name' => 'Procurement,Warehouse,Workshop'
        ]);
        Department::create([
            'name' => 'HR'
        ]);
        Department::create([
            'name' => 'MS Division'
        ]);
        Department::create([
            'name' => 'Construction Division'
        ]);
        Department::create([
            'name' => 'Fiber Division'
        ]);
    }

    public function createUserTypes()
    {
        Type::create([
            'name' => 'Employee',
        ]);
        Type::create([
            'name' => 'HOD',
        ]);
        Type::create([
            'name' => 'HR',
        ]);
        Type::create([
            'name' => 'MD',
        ]);
        Type::create([
            'name' => 'Admin',
        ]);
        Type::create([
            'name' => 'Receptionist'
        ]);
        Type::create([
            'name' => 'Watchman'
        ]);
        Type::create([
            'name' => 'General'
        ]);
    }

    public function createUsers()
    {
        User::create([
            'employee_no' => 'ADE0001',
            'phone_no' => '0700000001',
            'email' => 'emp@adrian1.com',
            'password' => Hash::make('123456'),
            'nat_id' => '22915078',
            'name' => 'GULED ABDINASIR',
            'NSSF' => '26345101',
            'KRA_Pin' => '65189001',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542101',
            'category' => 'MS Division'
        ]);

        User::create([
            'employee_no' => 'ADE0002',
            'phone_no' => '0700000002',
            'email' => 'emp@adrian3.com',
            'password' => Hash::make('123456'),
            'nat_id' => '25831517',
            'name' => 'OMAR ADAN BILLOW',
            'NSSF' => '26345102',
            'KRA_Pin' => '65189002',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542102',
            'category' => 'MS Division'
        ]);
        User::create([
            'employee_no' => 'ADE0004',
            'phone_no' => '0700000004',
            'email' => 'emp@adrian4.com',
            'password' => Hash::make('123456'),
            'nat_id' => '26102725',
            'name' => 'GIKONYO ALBERT ITUIKA',
            'NSSF' => '26345104',
            'KRA_Pin' => '65189004',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542104',
            'category' => 'MS Division'
        ]);
        User::create([
            'employee_no' => 'ADE0005',
            'phone_no' => '0700000005',
            'email' => 'emp@adrian5.com',
            'password' => Hash::make('123456'),
            'nat_id' => '28786574',
            'name' => 'NYABUTO ALBERT',
            'NSSF' => '26345105',
            'KRA_Pin' => '65189005',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 6,
            'type_id' => 1,
            'NHIF' => '1542105',
            'category' => 'Fiber Division'
        ]);
        User::create([
            'employee_no' => 'ADE0006',
            'phone_no' => '0700000006',
            'email' => 'emp@adrian6.com',
            'password' => Hash::make('123456'),
            'nat_id' => '25831516',
            'name' => 'KIMANTHI ALEX KUTUVA',
            'NSSF' => '26345106',
            'KRA_Pin' => '65189006',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542106',
            'category' => 'MS Division'
        ]);
        User::create([
            'employee_no' => 'ADE0007',
            'phone_no' => '0700000007',
            'email' => 'emp@adrian8.com',
            'password' => Hash::make('123456'),
            'nat_id' => '24924766',
            'name' => 'LIVAHA ALEX AMBUGA',
            'NSSF' => '26345107',
            'KRA_Pin' => '65189007',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 5,
            'type_id' => 1,
            'NHIF' => '1542107',
            'category' => 'Construction Division'
        ]);
        User::create([
            'employee_no' => 'ADE0008',
            'phone_no' => '0700000008',
            'email' => 'emp@adrian808F.com',
            'password' => Hash::make('123456'),
            'nat_id' => '22399968',
            'name' => 'MUTUNGA ALEX',
            'NSSF' => '26345108',
            'KRA_Pin' => '65189008',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542108',
            'category' => 'MS Division'
        ]);
        User::create([
            'employee_no' => 'ADE0009',
            'phone_no' => '0700000009',
            'email' => 'emp@adrian9.com',
            'password' => Hash::make('123456'),
            'nat_id' => '11587853',
            'name' => 'SAITOTI ALEX',
            'NSSF' => '26345109',
            'KRA_Pin' => '65189009',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542109',
            'category' => 'MS Division'
        ]);
        User::create([
            'employee_no' => 'ADE0010',
            'phone_no' => '0700000010',
            'email' => 'emp@adrian10.com',
            'password' => Hash::make('123456'),
            'nat_id' => '28067287',
            'name' => 'SIMBA ALEX',
            'NSSF' => '26345110',
            'KRA_Pin' => '65189010',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 4,
            'type_id' => 1,
            'NHIF' => '1542110',
            'category' => 'MS Division'
        ]);
        User::create([
            'employee_no' => 'ADE0011',
            'phone_no' => '0700000011',
            'email' => 'emp@adrian11.com',
            'password' => Hash::make('123456'),
            'nat_id' => '14570082',
            'name' => 'KIMANI ALEXANDER KANYI',
            'NSSF' => '26345111',
            'KRA_Pin' => '65189011',
            'avatar' => 'avatar_adrian.png',
            'active' => 0,
            'department_id' => 5,
            'type_id' => 1,
            'NHIF' => '1542111',
            'category' => 'Construction Division'
            ]);
        User::create([
                'employee_no' => 'ADE0012',
                'phone_no' => '0700000012',
                'email' => 'emp@adrian12.com',
                'password' => Hash::make('123456'),
                'nat_id' => '25017914',
                'name' => 'MWANGI ALEXANDER KARANI',
                'NSSF' => '26345112',
                'KRA_Pin' => '65189012',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '1542112',
                'category' => 'MS Division'
             ]);
        User::create([
                'employee_no' => 'ADE0013',
                'phone_no' => '0700000013',
                'email' => 'emp@adrian13.com',
                'password' => Hash::make('123456'),
                'nat_id' => '24540387',
                'name' => 'MUTISO ALFRED',
                'NSSF' => '26345113',
                'KRA_Pin' => '65189013',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '1542113',
                'category' => 'MS Division'
            ]);
                    User::create([
                    'employee_no' => 'ADE0014',
                    'phone_no' => '0700000014',
                    'email' => 'emp@adrian14.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22126819',
                    'name' => 'KENGETHE ALLAN NDUNGU',
                    'NSSF' => '26345114',
                    'KRA_Pin' => '65189014',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '1542114',
                    'category' => 'Workshop'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0016',
                    'phone_no' => '0700000016',
                    'email' => 'emp@adrian16.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29239052',
                    'name' => 'KIPRUTO AMOS TARUS',
                    'NSSF' => '26345116',
                    'KRA_Pin' => '65189016',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542116',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0018',
                    'phone_no' => '0700000018',
                    'email' => 'emp@adrian18.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '20208633',
                    'name' => 'OTIENO AMOS OPIYO',
                    'NSSF' => '26345118',
                    'KRA_Pin' => '65189018',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542118',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0020',
                    'phone_no' => '0700000020',
                    'email' => 'emp@adrian20.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25493265',
                    'name' => 'NAMBANDE ANN INGOSI',
                    'NSSF' => '26345120',
                    'KRA_Pin' => '65189020',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542120',
                    'category' => 'Administration'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0021',
                    'phone_no' => '0700000021',
                    'email' => 'emp@adrian21.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '14609681',
                    'name' => 'NJERI ANN KAGIMA',
                    'NSSF' => '26345121',
                    'KRA_Pin' => '65189021',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542121',
                    'category' => 'Finance'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0022',
                    'phone_no' => '0700000022',
                    'email' => 'emp@adrian22.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23053775',
                    'name' => 'KIPLANGAT ANTONY NGETICH',
                    'NSSF' => '26345122',
                    'KRA_Pin' => '65189022',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542122',
                    'category' => 'Construction Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0023',
                    'phone_no' => '0700000023',
                    'email' => 'emp@adrian23.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25301194',
                    'name' => 'GECHANGA ASELINE',
                    'NSSF' => '26345123',
                    'KRA_Pin' => '65189078',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542123',
                    'category' => 'Business Development'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0024',
                    'phone_no' => '0700000024',
                    'email' => 'emp@adrian24.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27945760',
                    'name' => 'WAFULA AUGUSTINE SIMIYU',
                    'NSSF' => '26345124',
                    'KRA_Pin' => '65189024',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542124',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0025',
                    'phone_no' => '0700000025',
                    'email' => 'emp@adrian25.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '10028871',
                    'name' => 'ADOW BARE',
                    'NSSF' => '26345125',
                    'KRA_Pin' => '65189025',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542125',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0026',
                    'phone_no' => '0700000026',
                    'email' => 'emp@adrian26.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25032613',
                    'name' => 'JUSTIN BENARD TANIN',
                    'NSSF' => '26345126',
                    'KRA_Pin' => '65189026',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542126',
                    'category' => 'Logistics'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0027',
                    'phone_no' => '0700000027',
                    'email' => 'emp@adrian27.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '20800275',
                    'name' => 'WACHAI BENARD NJOROGE',
                    'NSSF' => '26345127',
                    'KRA_Pin' => '65189027',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 4,
                    'NHIF' => '1542127',
                    'category' => 'Managing Director'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0029',
                    'phone_no' => '0700000029',
                    'email' => 'emp@adrian29.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29207550',
                    'name' => 'MUTHAMI BENSON',
                    'NSSF' => '26345129',
                    'KRA_Pin' => '65189029',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542129',
                    'category' => 'Construction Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0031',
                    'phone_no' => '0700000031',
                    'email' => 'emp@adrian31.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22894599',
                    'name' => 'OUMA BOAZ',
                    'NSSF' => '26345131',
                    'KRA_Pin' => '65189031',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542131',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0034',
                    'phone_no' => '0700000034',
                    'email' => 'emp@adrian34.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '11478875',
                    'name' => 'MUTHOKA BONIFACE',
                    'NSSF' => '26345134',
                    'KRA_Pin' => '65189034',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542134',
                    'category' => 'Construction Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0036',
                    'phone_no' => '0700000036',
                    'email' => 'emp@adrian36.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25901267',
                    'name' => 'W CATHERINE NJOROGE',
                    'NSSF' => '26345136',
                    'KRA_Pin' => '65189036',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542136',
                    'category' => 'Finance'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0039',
                    'phone_no' => '0700000039',
                    'email' => 'emp@adrian39.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22399524',
                    'name' => 'GATHOGO CHARLES KURIA',
                    'NSSF' => '26345139',
                    'KRA_Pin' => '65189039',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542139',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0041',
                    'phone_no' => '0700000041',
                    'email' => 'emp@adrian41.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27750292',
                    'name' => 'NYAGAKA CHARLES ONDIERE',
                    'NSSF' => '26345141',
                    'KRA_Pin' => '65189041',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542141',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0042',
                    'phone_no' => '0700000042',
                    'email' => 'emp@adrian42.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25323192',
                    'name' => 'KIHARA CHRIS MAINA',
                    'NSSF' => '26345142',
                    'KRA_Pin' => '65189042',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542142',
                    'category' => 'Construction Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0044',
                    'phone_no' => '0700000044',
                    'email' => 'emp@adrian44.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27153865',
                    'name' => 'WARURU CHRISTOPER',
                    'NSSF' => '26345144',
                    'KRA_Pin' => '65189044',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542144',
                    'category' => 'Logistics'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0045',
                    'phone_no' => '0700000045',
                    'email' => 'emp@adrian45.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27956123',
                    'name' => 'KARWITHA CLARE',
                    'NSSF' => '26345145',
                    'KRA_Pin' => '65189045',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542145',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0047',
                    'phone_no' => '0700000047',
                    'email' => 'emp@adrian47.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '10573164',
                    'name' => 'KAMAU DANIEL MAINA',
                    'NSSF' => '26345147',
                    'KRA_Pin' => '65189047',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542147',
                    'category' => 'Business Development'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0048',
                    'phone_no' => '0700000048',
                    'email' => 'emp@adrian48.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25731967',
                    'name' => 'KIMANTHI DANIEL MUTETI',
                    'NSSF' => '26345148',
                    'KRA_Pin' => '65189048',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542148',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0049',
                    'phone_no' => '0700000049',
                    'email' => 'emp@adrian49.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24608100',
                    'name' => 'NJOROGE DANIEL',
                    'NSSF' => '26345149',
                    'KRA_Pin' => '65189049',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542149',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0051',
                    'phone_no' => '0700000051',
                    'email' => 'emp@adrian51.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '11034426',
                    'name' => 'LAZIMA DAUDI ATHUMANI',
                    'NSSF' => '26345151',
                    'KRA_Pin' => '65189051',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542151',
                    'category' => 'Logistics'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0052',
                    'phone_no' => '0700000052',
                    'email' => 'emp@adrian52.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24397590',
                    'name' => 'MULE DAVID DANIA',
                    'NSSF' => '26345152',
                    'KRA_Pin' => '65189052',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542152',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0053',
                    'phone_no' => '0700000053',
                    'email' => 'emp@adrian53.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24072956',
                    'name' => 'ODHIAMBO DAVID MBOYA',
                    'NSSF' => '26345153',
                    'KRA_Pin' => '65189053',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542153',
                    'category' => 'MS Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0054',
                    'phone_no' => '0700000054',
                    'email' => 'emp@adrian54.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22081107',
                    'name' => 'WERE DAVID',
                    'NSSF' => '26345154',
                    'KRA_Pin' => '65189054',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542154',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0055',
                    'phone_no' => '0700000055',
                    'email' => 'emp@adrian55.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29404766',
                    'name' => 'MUEMA DENIS PETER',
                    'NSSF' => '26345155',
                    'KRA_Pin' => '65189055',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542155',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0057',
                    'phone_no' => '0700000057',
                    'email' => 'emp@adrian57.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29456927',
                    'name' => 'MUTUKU DENIS KIAMBA',
                    'NSSF' => '26345157',
                    'KRA_Pin' => '65189057',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542157',
                    'category' => 'Construction Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0058',
                    'phone_no' => '0700000058',
                    'email' => 'emp@adrian58.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30402719',
                    'name' => 'ISIAHO DENNIS',
                    'NSSF' => '26345158',
                    'KRA_Pin' => '65189058',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542158',
                    'category' => 'Fiber Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0059',
                    'phone_no' => '0700000059',
                    'email' => 'emp@adrian59.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26321322',
                    'name' => 'MUKWENYI DENNIS',
                    'NSSF' => '26345159',
                    'KRA_Pin' => '65189059',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542159',
                    'category' => 'Construction Division'
                    ]);
                    User::create([
                    'employee_no' => 'ADE0061',
                    'phone_no' => '0700000061',
                    'email' => 'emp@adrian61.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '13390994',
                    'name' => 'MUCHAI DOUGHLAS GITUNDU',
                    'NSSF' => '26345161',
                    'KRA_Pin' => '65189061',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542161',
                    'category' => 'MS Division'
                    ]);
                User::create([
                'employee_no' => 'ADE0062',
                'phone_no' => '0700000062',
                'email' => 'emp@adrian62.com',
                'password' => Hash::make('123456'),
                'nat_id' => '28121330',
                'name' => 'MBITHI DUNCAN NGINA',
                'NSSF' => '26345162',
                'KRA_Pin' => '65189062',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 2,
                'type_id' => 1,
                'NHIF' => '1542162',
                'category' => 'Workshop'
                ]);
                User::create([
                    'employee_no' => 'ADE0063',
                    'phone_no' => '0700000063',
                    'email' => 'emp@adrian63.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29117202',
                    'name' => 'NDEGWA DUNCAN',
                    'NSSF' => '26345163',
                    'KRA_Pin' => '65189063',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542163',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0064',
                    'phone_no' => '0700000064',
                    'email' => 'emp@adrian64.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27508118',
                    'name' => 'OCHIENG DUNCAN ADUNGA',
                    'NSSF' => '26345164',
                    'KRA_Pin' => '65189064',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542164',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0066',
                    'phone_no' => '0700000066',
                    'email' => 'emp@adrian66.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '966654',
                    'name' => 'MAINA EDWARD MWANGI',
                    'NSSF' => '26345166',
                    'KRA_Pin' => '65189066',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542166',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0067',
                    'phone_no' => '0700000067',
                    'email' => 'emp@adrian67.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22344697',
                    'name' => 'MBOGO ELIAS WILSON',
                    'NSSF' => '26345167',
                    'KRA_Pin' => '65189067',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542167',
                    'category' => 'Finance'
                ]);
                User::create([
                    'employee_no' => 'ADE0068',
                    'phone_no' => '0700000068',
                    'email' => 'emp@adrian68.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30383727',
                    'name' => 'NDERITU ELIJAH',
                    'NSSF' => '26345168',
                    'KRA_Pin' => '65189068',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542168',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0069',
                    'phone_no' => '0700000069',
                    'email' => 'emp@adrian69.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27323512',
                    'name' => 'NDUNGU ELIJAH KINUTHIA',
                    'NSSF' => '26345169',
                    'KRA_Pin' => '65189069',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542169',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0070',
                    'phone_no' => '0700000070',
                    'email' => 'emp@adrian70.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30148691',
                    'name' => 'MWANGI ELIUD MUNYUA',
                    'NSSF' => '26345170',
                    'KRA_Pin' => '65189070',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542170',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0073',
                    'phone_no' => '0700000073',
                    'email' => 'emp@adrian73.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28675894',
                    'name' => 'WANGUI EMMA WAMBUGU',
                    'NSSF' => '26345173',
                    'KRA_Pin' => '65189073',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542173',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0074',
                    'phone_no' => '0700000074',
                    'email' => 'emp@adrian74.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28480876',
                    'name' => 'B EMMANUEL EKESA',
                    'NSSF' => '26345174',
                    'KRA_Pin' => '65189074',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542174',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0077',
                    'phone_no' => '0700000077',
                    'email' => 'emp@adrian77.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27910917',
                    'name' => 'MWEGA ERIC NJANE',
                    'NSSF' => '26345177',
                    'KRA_Pin' => '65189077',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542177',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0079',
                    'phone_no' => '0700000079',
                    'email' => 'emp@adrian79.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29942867',
                    'name' => 'WAKHISI ERIC',
                    'NSSF' => '26345179',
                    'KRA_Pin' => '65189079',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542179',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0080',
                    'phone_no' => '0700000080',
                    'email' => 'emp@adrian80.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30810450',
                    'name' => 'WANGARI ESTHER KIMANI',
                    'NSSF' => '26345180',
                    'KRA_Pin' => '65189080',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542180',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0082',
                    'phone_no' => '0700000082',
                    'email' => 'emp@adrian82.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24710986',
                    'name' => 'NJOKI EVAH KARIUKI',
                    'NSSF' => '26345182',
                    'KRA_Pin' => '65189082',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542182',
                    'category' => 'Sales'
                ]);
                User::create([
                    'employee_no' => 'ADE0083',
                    'phone_no' => '0700000083',
                    'email' => 'emp@adrian.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22292051',
                    'name' => 'NJOROGE EVANSON NYAWARA',
                    'NSSF' => '26345183',
                    'KRA_Pin' => '65189083',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542183',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0084',
                    'phone_no' => '0700000084',
                    'email' => 'emp@adrian84.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21709376',
                    'name' => 'KIPKEMOI EZEKIEL',
                    'NSSF' => '26345184',
                    'KRA_Pin' => '65189084',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542184',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0085',
                    'phone_no' => '0700000085',
                    'email' => 'emp@adrian85.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28014597',
                    'name' => 'KIBET EZRA KUTO',
                    'NSSF' => '26345185',
                    'KRA_Pin' => '65189085',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542185',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0086',
                    'phone_no' => '07000000786',
                    'email' => 'emp@adrian86.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '31752293',
                    'name' => 'K FELIX KIMUTAI',
                    'NSSF' => '26345186',
                    'KRA_Pin' => '65189086',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542186',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0087',
                    'phone_no' => '0700000087',
                    'email' => 'emp@adrian87.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29762810',
                    'name' => 'KIBET FELIX',
                    'NSSF' => '26345187',
                    'KRA_Pin' => '65189087',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542187',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0088',
                    'phone_no' => '0700000088',
                    'email' => 'emp@adrian88.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '31812916',
                    'name' => 'KIPLIMO FELIX',
                    'NSSF' => '26345188',
                    'KRA_Pin' => '65189088',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542188',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0089',
                    'phone_no' => '0700000089',
                    'email' => 'emp@adrian89.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22375599',
                    'name' => 'NZUKI FELIX',
                    'NSSF' => '26345189',
                    'KRA_Pin' => '65189089',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 1,
                    'department_id' => 1,
                    'type_id' => 2,
                    'NHIF' => '1542189',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0090',
                    'phone_no' => '0700000090',
                    'email' => 'emp@adrian90.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27814409',
                    'name' => 'KIMANI FRANCIS AURA',
                    'NSSF' => '26345190',
                    'KRA_Pin' => '65189090',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542190',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0092',
                    'phone_no' => '0700000092',
                    'email' => 'emp@adrian92.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21848332',
                    'name' => 'WANJAU FRANCIS',
                    'NSSF' => '26345192',
                    'KRA_Pin' => '65189092',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '1542192',
                    'category' => 'Workshop'
                ]);
                User::create([
                    'employee_no' => 'ADE0093',
                    'phone_no' => '0700000093',
                    'email' => 'emp@adrian93.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30896015',
                    'name' => 'IHACHI FRANKLIN VIKATSI',
                    'NSSF' => '26345193',
                    'KRA_Pin' => '65189093',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542193',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0094',
                    'phone_no' => '0700000094',
                    'email' => 'emp@adrian94.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27738711',
                    'name' => 'KIPRONO FREDRICK',
                    'NSSF' => '26345194',
                    'KRA_Pin' => '65189094',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '1542194',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0095',
                    'phone_no' => '0700000095',
                    'email' => 'emp@adrian95.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25042105',
                    'name' => 'SHIBUTSE FREDRICK ALARA',
                    'NSSF' => '26345195',
                    'KRA_Pin' => '65189095',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '1542195',
                    'category' => 'Administration'
                ]);
                User::create([
                    'employee_no' => 'ADE0096',
                    'phone_no' => '0700000096',
                    'email' => 'emp@adrian96.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '13574093',
                    'name' => 'MURIUKI GABRIEL',
                    'NSSF' => '26345196',
                    'KRA_Pin' => '65189096',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542196',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0097',
                    'phone_no' => '0700000097',
                    'email' => 'emp@adrian97.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27839009',
                    'name' => 'KARANJA GEOFFREY',
                    'NSSF' => '26345197',
                    'KRA_Pin' => '65189097',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '1542197',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0099',
                    'phone_no' => '0700000099',
                    'email' => 'emp@adrian99.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25657586',
                    'name' => 'MUNGAI GEORGE',
                    'NSSF' => '26345199',
                    'KRA_Pin' => '65189099',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '1542199',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0100',
                    'phone_no' => '0700000100',
                    'email' => 'emp@adrian100.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '12582641',
                    'name' => 'WANJALA GEORGE WAMALWA',
                    'NSSF' => '76345100',
                    'KRA_Pin' => '75189100',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542100',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0101',
                    'phone_no' => '0700000101',
                    'email' => 'emp@adrian101.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29096041',
                    'name' => 'KIBUTI GERALD NJAGI',
                    'NSSF' => '76345101',
                    'KRA_Pin' => '75189101',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542101',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0102',
                    'phone_no' => '0700000102',
                    'email' => 'emp@adrian102.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24469693',
                    'name' => 'MATENDECHERE GIBSON',
                    'NSSF' => '76345102',
                    'KRA_Pin' => '75189102',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542102',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0103',
                    'phone_no' => '0700000103',
                    'email' => 'emp@adrian103.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22265957',
                    'name' => 'NJUGUNA GILBERT WANJIKU',
                    'NSSF' => '76345103',
                    'KRA_Pin' => '75189103',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542103',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0105',
                    'phone_no' => '0700000105',
                    'email' => 'emp@adrian105.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '31030390',
                    'name' => 'NDEGWA GODFREY',
                    'NSSF' => '76345105',
                    'KRA_Pin' => '75189105',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542105',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0107',
                    'phone_no' => '0700000107',
                    'email' => 'emp@adrian107.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28105435',
                    'name' => 'CHERUIYOT HARON',
                    'NSSF' => '76345107',
                    'KRA_Pin' => '75189107',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542107',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0108',
                    'phone_no' => '0700000108',
                    'email' => 'emp@adrian108.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28419223',
                    'name' => 'OGACHI HARON MOGUSU',
                    'NSSF' => '76345108',
                    'KRA_Pin' => '75189108',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542108',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0109',
                    'phone_no' => '0700000109',
                    'email' => 'emp@adrian109.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22426421',
                    'name' => 'WACHENJE HARRISON',
                    'NSSF' => '76345109',
                    'KRA_Pin' => '75189109',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542109',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0110',
                    'phone_no' => '0700000110',
                    'email' => 'emp@adrian110.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22836426',
                    'name' => 'KIMUTAI HENRY',
                    'NSSF' => '76345110',
                    'KRA_Pin' => '75189110',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542110',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0111',
                    'phone_no' => '0700000111',
                    'email' => 'emp@adrian111.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23291373',
                    'name' => 'IRUNGU HEZRON WANJIRA',
                    'NSSF' => '76345100',
                    'KRA_Pin' => '75189111',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542111',
                    'category' => 'Administration'
                ]);
                User::create([
                    'employee_no' => 'ADE0112',
                    'phone_no' => '0700000112',
                    'email' => 'emp@adrian112.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21711411',
                    'name' => 'KWAMBOKA HILDA',
                    'NSSF' => '76345112',
                    'KRA_Pin' => '75189112',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542112',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0113',
                    'phone_no' => '0700000113',
                    'email' => 'emp@adrian113.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28415628',
                    'name' => 'KIPYATOR HOSEA KIPLAGAT',
                    'NSSF' => '76345113',
                    'KRA_Pin' => '75189113',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542113',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0114',
                    'phone_no' => '0700000114',
                    'email' => 'emp@adrian114.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '31762779',
                    'name' => 'KIPTOO ISAAC',
                    'NSSF' => '76345114',
                    'KRA_Pin' => '75189114',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542114',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0115',
                    'phone_no' => '0700000115',
                    'email' => 'emp@adrian115.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27433207',
                    'name' => 'OUMA ISAAC OWINY',
                    'NSSF' => '76345115',
                    'KRA_Pin' => '75189115',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '2542115',
                    'category' => 'Warehousing'
                ]);
                User::create([
                    'employee_no' => 'ADE0116',
                    'phone_no' => '0700000116',
                    'email' => 'emp@adrian116.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24681809',
                    'name' => 'WATITWA ISAAC',
                    'NSSF' => '76345116',
                    'KRA_Pin' => '75189116',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542116',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0117',
                    'phone_no' => '0700000117',
                    'email' => 'emp@adrian117.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '14428790',
                    'name' => 'AMUNGA JACKSON',
                    'NSSF' => '76345117',
                    'KRA_Pin' => '75189117',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542117',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0118',
                    'phone_no' => '0700000118',
                    'email' => 'emp@adrian118.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '3491371',
                    'name' => 'N JACKSON MUTHAMA',
                    'NSSF' => '76345118',
                    'KRA_Pin' => '75189118',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542118',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0119',
                    'phone_no' => '0700000119',
                    'email' => 'emp@adrian119.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22258946',
                    'name' => 'GAKUNJU JAMES WATHINI',
                    'NSSF' => '76345119',
                    'KRA_Pin' => '75189119',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542119',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0120',
                    'phone_no' => '0700000120',
                    'email' => 'emp@adrian120.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '20597280',
                    'name' => 'KAMAU JAMES NDIRANGU',
                    'NSSF' => '76345120',
                    'KRA_Pin' => '75189120',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542120',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0121',
                    'phone_no' => '0700000121',
                    'email' => 'emp@adrian121.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24216458',
                    'name' => 'KEMEI JAMES CHENIBEI',
                    'NSSF' => '76345121',
                    'KRA_Pin' => '75189121',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542121',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0122',
                    'phone_no' => '0700000122',
                    'email' => 'emp@adrian122.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28845673',
                    'name' => 'KIPCHIRCHIR JAMES RONO',
                    'NSSF' => '76345122',
                    'KRA_Pin' => '75189122',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542122',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0123',
                    'phone_no' => '0700000123',
                    'email' => 'emp@adrian123.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29401432',
                    'name' => 'MUSYOKI JAMES KELI',
                    'NSSF' => '76345123',
                    'KRA_Pin' => '75189123',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542123',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0124',
                    'phone_no' => '0700000124',
                    'email' => 'emp@adrian124.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27063695',
                    'name' => 'MWANGI JAMES',
                    'NSSF' => '76345124',
                    'KRA_Pin' => '75189124',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542124',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0125',
                    'phone_no' => '0700000125',
                    'email' => 'emp@adrian125.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27319183',
                    'name' => 'WAITA JAMES WAMBUA',
                    'NSSF' => '76345125',
                    'KRA_Pin' => '75189125',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542125',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0126',
                    'phone_no' => '0700000126',
                    'email' => 'emp@adrian126.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29363782',
                    'name' => 'WAIRIMU JANET NGANGA',
                    'NSSF' => '76345126',
                    'KRA_Pin' => '75189126',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542126',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0127',
                    'phone_no' => '0700000127',
                    'email' => 'emp@adrian127.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22198889',
                    'name' => 'KAGENI JANICE KOBIA',
                    'NSSF' => '76345127',
                    'KRA_Pin' => '75189127',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '2542127',
                    'category' => 'Warehousing'
                ]);
                User::create([
                    'employee_no' => 'ADE0128',
                    'phone_no' => '0700000128',
                    'email' => 'emp@adrian128.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23773508',
                    'name' => 'MAKORI JARED MORURI',
                    'NSSF' => '76345128',
                    'KRA_Pin' => '75189128',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542128',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0129',
                    'phone_no' => '0700000129',
                    'email' => 'emp@adrian129.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '31688763',
                    'name' => 'CHEGE JIDLAPH MATA',
                    'NSSF' => '76345129',
                    'KRA_Pin' => '75189129',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542129',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0130',
                    'phone_no' => '0700000130',
                    'email' => 'emp@adrian130.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21632124',
                    'name' => 'MOGOI JOB OKEIRO',
                    'NSSF' => '76345130',
                    'KRA_Pin' => '75189130',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542130',
                    'category' => 'Department Free'
                ]);
                User::create([
                    'employee_no' => 'ADE0131',
                    'phone_no' => '0700000131',
                    'email' => 'emp@adrian131.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22584622',
                    'name' => 'GICHAGA JOHN GICHUHI',
                    'NSSF' => '76345131',
                    'KRA_Pin' => '75189131',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '2542131',
                    'category' => 'Workshop'
                ]);
                User::create([
                    'employee_no' => 'ADE0132',
                    'phone_no' => '0700000132',
                    'email' => 'emp@adrian132.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26106618',
                    'name' => 'GICHANA JOHN KIMARI',
                    'NSSF' => '76345132',
                    'KRA_Pin' => '75189132',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542132',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0133',
                    'phone_no' => '0700000133',
                    'email' => 'emp@adrian133.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24570796',
                    'name' => 'H JOHN IRUNGU',
                    'NSSF' => '76345133',
                    'KRA_Pin' => '75189133',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542133',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0134',
                    'phone_no' => '0700000134',
                    'email' => 'emp@adrian134.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '11508291',
                    'name' => 'MAINA JOHN',
                    'NSSF' => '76345134',
                    'KRA_Pin' => '75189134',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542134',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0137',
                    'phone_no' => '0700000137',
                    'email' => 'emp@adrian137.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '7034976',
                    'name' => 'NJAGI JOHN NDUMA',
                    'NSSF' => '76345137',
                    'KRA_Pin' => '75189137',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542137',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0138',
                    'phone_no' => '0700000138',
                    'email' => 'emp@adrian138.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23290312',
                    'name' => 'NZIOKA JOHN MUTUA',
                    'NSSF' => '76345138',
                    'KRA_Pin' => '75189138',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542138',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0140',
                    'phone_no' => '0700000140',
                    'email' => 'emp@adrian140.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '10168217',
                    'name' => 'IRUNGU JOSEPH',
                    'NSSF' => '76345140',
                    'KRA_Pin' => '75189140',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542140',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0141',
                    'phone_no' => '0700000141',
                    'email' => 'emp@adrian141.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23907803',
                    'name' => 'KIBUNJA JOSEPH NJOROGE',
                    'NSSF' => '76345141',
                    'KRA_Pin' => '75189141',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542141',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0143',
                    'phone_no' => '0700000143',
                    'email' => 'emp@adrian143.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '13712523',
                    'name' => 'KIOKO JOSEPH MULI',
                    'NSSF' => '76345143',
                    'KRA_Pin' => '75189143',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '2542143',
                    'category' => 'Workshop'
                ]);
                User::create([
                    'employee_no' => 'ADE0146',
                    'phone_no' => '0700000146',
                    'email' => 'emp@adrian146.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25399877',
                    'name' => 'MUNYUA JOSEPH MUHUHU',
                    'NSSF' => '76345146',
                    'KRA_Pin' => '75189146',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542146',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0147',
                    'phone_no' => '0700000147',
                    'email' => 'emp@adrian147.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29090543',
                    'name' => 'NJAU JOSEPH WAINAINA',
                    'NSSF' => '76345147',
                    'KRA_Pin' => '75189147',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542147',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0148',
                    'phone_no' => '0700000148',
                    'email' => 'emp@adrian148.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22145987',
                    'name' => 'NJUGUNA JOSEPH KIMANI',
                    'NSSF' => '76345148',
                    'KRA_Pin' => '75189148',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542148',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0149',
                    'phone_no' => '0700000149',
                    'email' => 'emp@adrian149.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21992519',
                    'name' => 'NJUGUNA JOSEPH MACHARIA',
                    'NSSF' => '76345149',
                    'KRA_Pin' => '75189149',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542149',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0150',
                    'phone_no' => '0700000150',
                    'email' => 'emp@adrian150.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22697936',
                    'name' => 'NYAMASO JOSEPH NDETO',
                    'NSSF' => '76345150',
                    'KRA_Pin' => '75189150',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542150',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0151',
                    'phone_no' => '0700000151',
                    'email' => 'emp@adrian151.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29308822',
                    'name' => 'CHEROROT JOSPHAT',
                    'NSSF' => '76345151',
                    'KRA_Pin' => '75189151',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542151',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0152',
                    'phone_no' => '0700000152',
                    'email' => 'emp@adrian152.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27678766',
                    'name' => 'GAIKA JOSPHAT MWANGI',
                    'NSSF' => '76345152',
                    'KRA_Pin' => '75189152',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542152',
                    'category' => 'Finance'
                ]);
                User::create([
                    'employee_no' => 'ADE0153',
                    'phone_no' => '0700000153',
                    'email' => 'emp@adrian153.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26817407',
                    'name' => 'KARIMI JOY',
                    'NSSF' => '76345153',
                    'KRA_Pin' => '75189153',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542153',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0154',
                    'phone_no' => '0700000154',
                    'email' => 'emp@adrian154.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29111369',
                    'name' => 'TANTI JOY',
                    'NSSF' => '76345154',
                    'KRA_Pin' => '75189154',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542154',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0156',
                    'phone_no' => '0700000156',
                    'email' => 'emp@adrian156.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26265267',
                    'name' => 'WANGECHI JOY MATHENGE',
                    'NSSF' => '76345156',
                    'KRA_Pin' => '75189156',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542156',
                    'category' => 'Administration'

                ]);
                User::create([
                    'employee_no' => 'ADE0157',
                    'phone_no' => '0700000157',
                    'email' => 'emp@adrian157.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29736906',
                    'name' => 'NDUKU JUDITH',
                    'NSSF' => '76345157',
                    'KRA_Pin' => '75189157',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542157',
                    'category' => 'Sales'
                ]);
                User::create([
                    'employee_no' => 'ADE0159',
                    'phone_no' => '0700000159',
                    'email' => 'emp@adrian159.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26310250',
                    'name' => 'KARIUKI JULIUS MWANGI',
                    'NSSF' => '76345159',
                    'KRA_Pin' => '75189159',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542159',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0160',
                    'phone_no' => '0700000160',
                    'email' => 'emp@adrian160.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26072128',
                    'name' => 'MACHARIA JULIUS',
                    'NSSF' => '76345160',
                    'KRA_Pin' => '75189160',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542160',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0162',
                    'phone_no' => '0700000162',
                    'email' => 'emp@adrian162.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '3962933',
                    'name' => 'OCHIENG KEN',
                    'NSSF' => '76345162',
                    'KRA_Pin' => '75189162',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542162',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0165',
                    'phone_no' => '0700000165',
                    'email' => 'emp@adrian165.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25567878',
                    'name' => 'ANDOLO KEVIN MUYALE',
                    'NSSF' => '76345165',
                    'KRA_Pin' => '75189165',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '2542165',
                    'category' => 'Workshop'
                ]);
                User::create([
                    'employee_no' => 'ADE0166',
                    'phone_no' => '0700000166',
                    'email' => 'emp@adrian166.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27898183',
                    'name' => 'KIPKOECH LAWRENCE LAGAT',
                    'NSSF' => '76345166',
                    'KRA_Pin' => '75189166',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542166',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0167',
                    'phone_no' => '0700000167',
                    'email' => 'emp@adrian167.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '13854048',
                    'name' => 'MURIITHI LAWRENCE SEVERINO',
                    'NSSF' => '76345167',
                    'KRA_Pin' => '75189167',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542167',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0168',
                    'phone_no' => '0700000168',
                    'email' => 'emp@adrian168.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25516467',
                    'name' => 'MUNGAI LEAKY',
                    'NSSF' => '76345168',
                    'KRA_Pin' => '75189168',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '2542168',
                    'category' => 'Warehousing'
                ]);
                User::create([
                    'employee_no' => 'ADE0169',
                    'phone_no' => '0700000169',
                    'email' => 'emp@adrian169.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27928452',
                    'name' => 'KIVUTI LENSON KIURA',
                    'NSSF' => '76345169',
                    'KRA_Pin' => '75189169',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542169',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0170',
                    'phone_no' => '0700000170',
                    'email' => 'emp@adrian170.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '20200879',
                    'name' => 'SOITA LEONARD MAKOKHA',
                    'NSSF' => '76345170',
                    'KRA_Pin' => '75189170',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542170',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0171',
                    'phone_no' => '0700000171',
                    'email' => 'emp@adrian171.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25714225',
                    'name' => 'KAMAU LEVIS KARANJA',
                    'NSSF' => '76345171',
                    'KRA_Pin' => '75189171',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542171',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0173',
                    'phone_no' => '0700000173',
                    'email' => 'emp@adrian173.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25762557',
                    'name' => 'ANDAYE LUKE',
                    'NSSF' => '76345173',
                    'KRA_Pin' => '75189173',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542173',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0175',
                    'phone_no' => '0700000175',
                    'email' => 'emp@adrian175.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25834085',
                    'name' => 'MWIRIGI MARK GACAMBA',
                    'NSSF' => '76345175',
                    'KRA_Pin' => '75189175',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542175',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0176',
                    'phone_no' => '0700000176',
                    'email' => 'emp@adrian176.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27929848',
                    'name' => 'MWALAI MARTIN',
                    'NSSF' => '76345176',
                    'KRA_Pin' => '75189176',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542176',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0177',
                    'phone_no' => '0700000177',
                    'email' => 'emp@adrian177.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30041898',
                    'name' => 'NJUGUNA MARTIN',
                    'NSSF' => '76345177',
                    'KRA_Pin' => '75189177',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542177',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0179',
                    'phone_no' => '0700000179',
                    'email' => 'emp@adrian179.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24206863',
                    'name' => 'MIAKO MARYJANE',
                    'NSSF' => '76345179',
                    'KRA_Pin' => '75189179',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 2,
                    'NHIF' => '2542179',
                    'category' => 'Procurement,Warehousing,Workshop'
                ]);
                User::create([
                    'employee_no' => 'ADE0180',
                    'phone_no' => '0700000180',
                    'email' => 'emp@adrian180.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25170630',
                    'name' => 'CHEPKOSGEI MAYLEE KIMALEL',
                    'NSSF' => '76345180',
                    'KRA_Pin' => '75189180',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542180',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0182',
                    'phone_no' => '0700000182',
                    'email' => 'emp@adrian182.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21843138',
                    'name' => 'RODAH MERCY ANGOSEH',
                    'NSSF' => '76345182',
                    'KRA_Pin' => '75189182',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542182',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0192',
                    'phone_no' => '0700000192',
                    'email' => 'emp@adrian192.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '9873138',
                    'name' => 'MOSES NYABICHA MOREKA',
                    'NSSF' => '807976',
                    'KRA_Pin' => '23456',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '2542182',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0183',
                    'phone_no' => '0700000183',
                    'email' => 'emp@adrian183.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27886337',
                    'name' => 'NGULUNGU MESHACK MWATHE',
                    'NSSF' => '76345183',
                    'KRA_Pin' => '75189183',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542183',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0184',
                    'phone_no' => '0700000184',
                    'email' => 'emp@adrian184.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24847360',
                    'name' => 'WAMBUA MESHACK MUEMA',
                    'NSSF' => '76345184',
                    'KRA_Pin' => '75189184',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542184',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0185',
                    'phone_no' => '0700000185',
                    'email' => 'emp@adrian185.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28767356',
                    'name' => 'KIBIWWOT MICAH',
                    'NSSF' => '76345185',
                    'KRA_Pin' => '75189185',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542185',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0187',
                    'phone_no' => '0700000187',
                    'email' => 'emp@adrian187.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24377658',
                    'name' => 'MUGO MICHAEL MWANIKI',
                    'NSSF' => '76345187',
                    'KRA_Pin' => '75189187',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542187',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0189',
                    'phone_no' => '0700000189',
                    'email' => 'emp@adrian189.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '12403812',
                    'name' => 'NYAGA MICHAEL',
                    'NSSF' => '76345189',
                    'KRA_Pin' => '75189189',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542189',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0190',
                    'phone_no' => '0700000190',
                    'email' => 'emp@adrian190.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28381867',
                    'name' => 'KAMAU MORRIS MUTONYA',
                    'NSSF' => '76345190',
                    'KRA_Pin' => '75189190',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542190',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0191',
                    'phone_no' => '0700000191',
                    'email' => 'emp@adrian191.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22437579',
                    'name' => 'KARIUKI MORRIS',
                    'NSSF' => '76345191',
                    'KRA_Pin' => '75189191',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '2542191',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0193',
                    'phone_no' => '0700000193',
                    'email' => 'emp@adrian193.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27957728',
                    'name' => 'MUKHWANA MOSES',
                    'NSSF' => '76345193',
                    'KRA_Pin' => '75189193',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '2542193',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0194',
                    'phone_no' => '0700000194',
                    'email' => 'emp@adrian194.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '5357567',
                    'name' => 'ABDINOOR MUKHTAR',
                    'NSSF' => '76345194',
                    'KRA_Pin' => '75189194',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542194',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0195',
                    'phone_no' => '0700000195',
                    'email' => 'emp@adrian195.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '12444428',
                    'name' => 'KINGESI MUTETI',
                    'NSSF' => '76345195',
                    'KRA_Pin' => '75189195',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542195',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0196',
                    'phone_no' => '0700000196',
                    'email' => 'emp@adrian196.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21768902',
                    'name' => 'MATHUVA MUTHENGI',
                    'NSSF' => '76345196',
                    'KRA_Pin' => '75189196',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '2542196',
                    'category' => 'MS Division'
                ]);
User::create([
    'employee_no' => 'ADE0197',
    'phone_no' => '0700000197',
    'email' => 'emp@adrian197.com',
    'password' => Hash::make('123456'),
    'nat_id' => '13781940',
    'name' => 'MASILA MUTINDA',
    'NSSF' => '76345197',
    'KRA_Pin' => '75189197',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 5,
    'type_id' => 1,
    'NHIF' => '2542197',
    'category' => 'Construction Division'
]);
User::create([
    'employee_no' => 'ADE0198',
    'phone_no' => '0700000198',
    'email' => 'emp@adrian198.com',
    'password' => Hash::make('123456'),
    'nat_id' => '26378747',
    'name' => 'KASI NAOMI MUE',
    'NSSF' => '76345198',
    'KRA_Pin' => '75189198',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 1,
    'type_id' => 1,
    'NHIF' => '2542198',
    'category' => 'Administration'
]);
User::create([
    'employee_no' => 'ADE0200',
    'phone_no' => '0700000200',
    'email' => 'emp@adrian200.com',
    'password' => Hash::make('123456'),
    'nat_id' => '7178273',
    'name' => 'MBURU NELSON MUGURE',
    'NSSF' => '87345200',
    'KRA_Pin' => '86189200',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 2,
    'type_id' => 1,
    'NHIF' => '3642200',
    'category' => 'Workshop'
]);
User::create([
    'employee_no' => 'ADE0202',
    'phone_no' => '0700000202',
    'email' => 'emp@adrian202.com',
    'password' => Hash::make('123456'),
    'nat_id' => '21440632',
    'name' => 'M NESBITT KWAPATALA',
    'NSSF' => '87345202',
    'KRA_Pin' => '86189202',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 5,
    'type_id' => 1,
    'NHIF' => '3642202',
    'category' => 'Construction Division'
]);
User::create([
    'employee_no' => 'ADE0204',
    'phone_no' => '0700000204',
    'email' => 'emp@adrian204.com',
    'password' => Hash::make('123456'),
    'nat_id' => '20298774',
    'name' => 'K NICHOLAS LAGAT',
    'NSSF' => '87345204',
    'KRA_Pin' => '86189204',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 6,
    'type_id' => 1,
    'NHIF' => '3642204',
    'category' => 'Fiber Division'
]);
User::create([
    'employee_no' => 'ADE0205',
    'phone_no' => '0700000205',
    'email' => 'emp@adrian205.com',
    'password' => Hash::make('123456'),
    'nat_id' => '27632322',
    'name' => 'KINOTI NICHOLAS MANYARA',
    'NSSF' => '87345205',
    'KRA_Pin' => '86189205',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 1,
    'type_id' => 1,
    'NHIF' => '3642205',
    'category' => 'Department Free'
]);
User::create([
    'employee_no' => 'ADE0206',
    'phone_no' => '0700000206',
    'email' => 'emp@adrian206.com',
    'password' => Hash::make('123456'),
    'nat_id' => '11296965',
    'name' => 'KIPLIMO NICHOLAS BITTOK',
    'NSSF' => '87345206',
    'KRA_Pin' => '86189206',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642206',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0207',
    'phone_no' => '0700000207',
    'email' => 'emp@adrian207.com',
    'password' => Hash::make('123456'),
    'nat_id' => '28479330',
    'name' => 'MURIITHI NICHOLAS NYAGA',
    'NSSF' => '87345207',
    'KRA_Pin' => '86189207',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 6,
    'type_id' => 1,
    'NHIF' => '3642207',
    'category' => 'Fiber Division'
]);
User::create([
    'employee_no' => 'ADE0208',
    'phone_no' => '0700000208',
    'email' => 'emp@adrian208.com',
    'password' => Hash::make('123456'),
    'nat_id' => '27382139',
    'name' => 'MUTHUGUMI NICHOLAS NDEGE',
    'NSSF' => '87345208',
    'KRA_Pin' => '86189208',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642208',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0210',
    'phone_no' => '0700000210',
    'email' => 'emp@adrian210.com',
    'password' => Hash::make('123456'),
    'nat_id' => '27759273',
    'name' => 'KIBIWOTT PATRICK LAGAT',
    'NSSF' => '87345210',
    'KRA_Pin' => '86189210',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 6,
    'type_id' => 1,
    'NHIF' => '3642210',
    'category' => 'Fiber Division'
]);
User::create([
    'employee_no' => 'ADE0211',
    'phone_no' => '0700000211',
    'email' => 'emp@adrian211.com',
    'password' => Hash::make('123456'),
    'nat_id' => '27152713',
    'name' => 'KYALO PATRICK MUTHENGI',
    'NSSF' => '87345211',
    'KRA_Pin' => '86189211',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642211',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0212',
    'phone_no' => '0700000212',
    'email' => 'emp@adrian212.com',
    'password' => Hash::make('123456'),
    'nat_id' => '24117442',
    'name' => 'MAINA PATRICK WAITHATU',
    'NSSF' => '87345212',
    'KRA_Pin' => '86189212',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 6,
    'type_id' => 1,
    'NHIF' => '3642212',
    'category' => 'Fiber Division'
]);
User::create([
    'employee_no' => 'ADE0213',
    'phone_no' => '0700000213',
    'email' => 'emp@adrian213.com',
    'password' => Hash::make('123456'),
    'nat_id' => '24461019',
    'name' => 'NGANGA PATRICK WAINAINA',
    'NSSF' => '87345213',
    'KRA_Pin' => '86189213',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642213',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0214',
    'phone_no' => '0700000214',
    'email' => 'emp@adrian214.com',
    'password' => Hash::make('123456'),
    'nat_id' => '21854967',
    'name' => 'NJOGU PATRICK CHAI',
    'NSSF' => '87345214',
    'KRA_Pin' => '86189214',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 5,
    'type_id' => 1,
    'NHIF' => '3642214',
    'category' => 'Construction Division'
]);
User::create([
    'employee_no' => 'ADE0215',
    'phone_no' => '0700000215',
    'email' => 'emp@adrian215.com',
    'password' => Hash::make('123456'),
    'nat_id' => '5945844',
    'name' => 'MAINA PAUL THIONGO',
    'NSSF' => '87345215',
    'KRA_Pin' => '86189215',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 1,
    'type_id' => 1,
    'NHIF' => '3642215',
    'category' => 'Logistics'
]);
User::create([
    'employee_no' => 'ADE0216',
    'phone_no' => '0700000216',
    'email' => 'emp@adrian216.com',
    'password' => Hash::make('123456'),
    'nat_id' => '28065237',
    'name' => 'MUMO PAUL MBATHA',
    'NSSF' => '87345216',
    'KRA_Pin' => '86189216',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642216',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0217',
    'phone_no' => '0700000217',
    'email' => 'emp@adrian217.com',
    'password' => Hash::make('123456'),
    'nat_id' => '27311978',
    'name' => 'MWANGI PAUL IRUNGU',
    'NSSF' => '87345217',
    'KRA_Pin' => '86189217',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 5,
    'type_id' => 1,
    'NHIF' => '3642217',
    'category' => 'Construction Division'
]);
User::create([
    'employee_no' => 'ADE0218',
    'phone_no' => '0700000218',
    'email' => 'emp@adrian218.com',
    'password' => Hash::make('123456'),
    'nat_id' => '25873149',
    'name' => 'NJERI  PERPETUAL',
    'NSSF' => '87345218',
    'KRA_Pin' => '86189218',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642218',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0219',
    'phone_no' => '0700000219',
    'email' => 'emp@adrian219.com',
    'password' => Hash::make('123456'),
    'nat_id' => '28381827',
    'name' => 'KABUGI PETER NDUNGU',
    'NSSF' => '87345219',
    'KRA_Pin' => '86189219',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642219',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0220',
    'phone_no' => '0700000220',
    'email' => 'emp@adrian220.com',
    'password' => Hash::make('123456'),
    'nat_id' => '20111213',
    'name' => 'KIOKO PETER MUSAU',
    'NSSF' => '87345220',
    'KRA_Pin' => '86189220',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642220',
    'category' => 'MS Division'
]);
User::create([
    'employee_no' => 'ADE0221',
    'phone_no' => '0700000221',
    'email' => 'emp@adrian221.com',
    'password' => Hash::make('123456'),
    'nat_id' => '27717049',
    'name' => 'MACHARIA PETER KURIA',
    'NSSF' => '87345221',
    'KRA_Pin' => '86189221',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 6,
    'type_id' => 1,
    'NHIF' => '3642221',
    'category' => 'Fiber Division'
]);
User::create([
    'employee_no' => 'ADE0222',
    'phone_no' => '0700000222',
    'email' => 'emp@adrian222.com',
    'password' => Hash::make('123456'),
    'nat_id' => '25727261',
    'name' => 'MAVUA PETER MUTUA',
    'NSSF' => '87345222',
    'KRA_Pin' => '86189222',
    'avatar' => 'avatar_adrian.png',
    'active' => 0,
    'department_id' => 4,
    'type_id' => 1,
    'NHIF' => '3642222',
    'category' => 'MS Division'
]);
    User::create([
        'employee_no' => 'ADE0223',
        'phone_no' => '0700000223',
        'email' => 'emp@adrian223.com',
        'password' => Hash::make('123456'),
        'nat_id' => '14718607',
        'name' => 'MBUGUA PETER',
        'NSSF' => '87345223',
        'KRA_Pin' => '86189223',
        'avatar' => 'avatar_adrian.png',
        'active' => 0,
        'department_id' => 4,
        'type_id' => 1,
        'NHIF' => '3642223',
        'category' => 'MS Division'
        ]);
                User::create([
                'employee_no' => 'ADE0225',
                'phone_no' => '0700000225',
                'email' => 'emp@adrian225.com',
                'password' => Hash::make('123456'),
                'nat_id' => '27824727',
                'name' => 'WACHIRA PETER MWENDA',
                'NSSF' => '87345225',
                'KRA_Pin' => '86189225',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642225',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0226',
                'phone_no' => '0700000226',
                'email' => 'emp@adrian226.com',
                'password' => Hash::make('123456'),
                'nat_id' => '24519689',
                'name' => 'WAFULA PETER',
                'NSSF' => '87345226',
                'KRA_Pin' => '86189226',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 6,
                'type_id' => 1,
                'NHIF' => '3642226',
                'category' => 'Fiber Division'
                ]);
                User::create([
                'employee_no' => 'ADE0227',
                'phone_no' => '0700000227',
                'email' => 'emp@adrian227.com',
                'password' => Hash::make('123456'),
                'nat_id' => '28655069',
                'name' => 'KETER PHILEMON',
                'NSSF' => '87345227',
                'KRA_Pin' => '86189227',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642227',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0228',
                'phone_no' => '0700000228',
                'email' => 'emp@adrian228.com',
                'password' => Hash::make('123456'),
                'nat_id' => '24911419',
                'name' => 'MUKUNDI PHILIP',
                'NSSF' => '87345228',
                'KRA_Pin' => '86189228',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642228',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0230',
                'phone_no' => '0700000230',
                'email' => 'emp@adrian230.com',
                'password' => Hash::make('123456'),
                'nat_id' => '22831941',
                'name' => 'KABOI PHINIAS',
                'NSSF' => '87345230',
                'KRA_Pin' => '86189230',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642230',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0232',
                'phone_no' => '0700000232',
                'email' => 'emp@adrian232.com',
                'password' => Hash::make('123456'),
                'nat_id' => '27595903',
                'name' => 'MUTISO PIUS',
                'NSSF' => '87345232',
                'KRA_Pin' => '86189232',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 2,
                'type_id' => 1,
                'NHIF' => '3642232',
                'category' => 'Workshop'
                ]);
                User::create([
                'employee_no' => 'ADE0233',
                'phone_no' => '0700000233',
                'email' => 'emp@adrian233.com',
                'password' => Hash::make('123456'),
                'nat_id' => '28411435',
                'name' => 'ANAKUTA RAIDON WECHULI',
                'NSSF' => '87345233',
                'KRA_Pin' => '86189233',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 6,
                'type_id' => 1,
                'NHIF' => '3642233',
                'category' => 'Fiber Division'
                ]);
                User::create([
                'employee_no' => 'ADE0234',
                'phone_no' => '0700000234',
                'email' => 'emp@adrian234.com',
                'password' => Hash::make('123456'),
                'nat_id' => '24388378',
                'name' => 'MUNGIIRIA REUBEN GITUMA',
                'NSSF' => '87345234',
                'KRA_Pin' => '86189234',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642234',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0235',
                'phone_no' => '0700000235',
                'email' => 'emp@adrian235.com',
                'password' => Hash::make('123456'),
                'nat_id' => '31287546',
                'name' => 'NDOTI RHODAH NYAMBURA ',
                'NSSF' => '87345235',
                'KRA_Pin' => '86189235',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 1,
                'type_id' => 1,
                'NHIF' => '3642235',
                'category' => 'Administration'
                ]);
                User::create([
                'employee_no' => 'ADE0236',
                'phone_no' => '0700000236',
                'email' => 'emp@adrian236.com',
                'password' => Hash::make('123456'),
                'nat_id' => '11368561',
                'name' => 'CHERUIYOT RICHARD',
                'NSSF' => '87345236',
                'KRA_Pin' => '86189236',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 1,
                'type_id' => 1,
                'NHIF' => '3642236',
                'category' => 'Administration'
                ]);
                User::create([
                'employee_no' => 'ADE0238',
                'phone_no' => '0700000238',
                'email' => 'emp@adrian238.com',
                'password' => Hash::make('123456'),
                'nat_id' => '21751416',
                'name' => 'NDAMBUKI RICHARD WAMBUA',
                'NSSF' => '87345238',
                'KRA_Pin' => '86189238',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642238',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0239',
                'phone_no' => '0700000239',
                'email' => 'emp@adrian239.com',
                'password' => Hash::make('123456'),
                'nat_id' => '22106119',
                'name' => 'NZOMO ROBERT',
                'NSSF' => '87345239',
                'KRA_Pin' => '86189239',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 1,
                'type_id' => 1,
                'NHIF' => '3642239',
                'category' => 'Health & Safety'
                ]);
                User::create([
                'employee_no' => 'ADE0240',
                'phone_no' => '0700000240',
                'email' => 'emp@adrian240.com',
                'password' => Hash::make('123456'),
                'nat_id' => '27985718',
                'name' => 'ODHAMS ROBERT',
                'NSSF' => '87345240',
                'KRA_Pin' => '86189240',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 2,
                'NHIF' => '3642240',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0241',
                'phone_no' => '0700000241',
                'email' => 'emp@adrian241.com',
                'password' => Hash::make('123456'),
                'nat_id' => '25113313',
                'name' => 'OSORE ROBERT WASHIKA',
                'NSSF' => '87345241',
                'KRA_Pin' => '86189241',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 6,
                'type_id' => 1,
                'NHIF' => '3642241',
                'category' => 'Fiber Division'
                ]);
                User::create([
                'employee_no' => 'ADE0242',
                'phone_no' => '0700000242',
                'email' => 'emp@adrian242.com',
                'password' => Hash::make('123456'),
                'nat_id' => '12402438',
                'name' => 'RUNJI ROBERT MUCHIRI',
                'NSSF' => '87345242',
                'KRA_Pin' => '86189242',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642242',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0243',
                'phone_no' => '0700000243',
                'email' => 'emp@adrian243.com',
                'password' => Hash::make('123456'),
                'nat_id' => '25517184',
                'name' => 'MAUNDU RONALD',
                'NSSF' => '87345243',
                'KRA_Pin' => '86189243',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642243',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0244',
                'phone_no' => '0700000244',
                'email' => 'emp@adrian244.com',
                'password' => Hash::make('123456'),
                'nat_id' => '32009666',
                'name' => 'MUSALIA SAMMY ASIRIGWA',
                'NSSF' => '87345244',
                'KRA_Pin' => '86189244',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 6,
                'type_id' => 1,
                'NHIF' => '3642244',
                'category' => 'Fiber Division'
                ]);
                User::create([
                'employee_no' => 'ADE0246',
                'phone_no' => '0700000246',
                'email' => 'emp@adrian246.com',
                'password' => Hash::make('123456'),
                'nat_id' => '14417622',
                'name' => 'GACHIE SAMUEL MUTURA',
                'NSSF' => '87345246',
                'KRA_Pin' => '86189246',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642246',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0247',
                'phone_no' => '0700000247',
                'email' => 'emp@adrian247.com',
                'password' => Hash::make('123456'),
                'nat_id' => '20493599',
                'name' => 'GACHIGUA SAMUEL',
                'NSSF' => '87345247',
                'KRA_Pin' => '86189247',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642247',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0248',
                'phone_no' => '0700000248',
                'email' => 'emp@adrian248.com',
                'password' => Hash::make('123456'),
                'nat_id' => '23948838',
                'name' => 'KARIUKI SAMUEL MWANGI',
                'NSSF' => '87345248',
                'KRA_Pin' => '86189248',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 1,
                'type_id' => 1,
                'NHIF' => '3642248',
                'category' => 'Logistics'
                ]);
                User::create([
                'employee_no' => 'ADE0250',
                'phone_no' => '0700000250',
                'email' => 'emp@adrian250.com',
                'password' => Hash::make('123456'),
                'nat_id' => '22226975',
                'name' => 'KOGIE SAMUEL WAWERU',
                'NSSF' => '87345250',
                'KRA_Pin' => '86189250',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642250',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0251',
                'phone_no' => '0700000251',
                'email' => 'emp@adrian251.com',
                'password' => Hash::make('123456'),
                'nat_id' => '29120594',
                'name' => 'NJOROGE SAMUEL MWANGI',
                'NSSF' => '87345251',
                'KRA_Pin' => '86189251',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 1,
                'type_id' => 1,
                'NHIF' => '3642251',
                'category' => 'Logistics'
                ]);
                User::create([
                'employee_no' => 'ADE0252',
                'phone_no' => '0700000252',
                'email' => 'emp@adrian252.com',
                'password' => Hash::make('123456'),
                'nat_id' => '24433072',
                'name' => 'NYAMOKI SAMUEL NYARIBARI',
                'NSSF' => '87345252',
                'KRA_Pin' => '86189252',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642252',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0253',
                'phone_no' => '0700000253',
                'email' => 'emp@adrian253.com',
                'password' => Hash::make('123456'),
                'nat_id' => '23756088',
                'name' => 'OKELLO SAMUEL',
                'NSSF' => '87345253',
                'KRA_Pin' => '86189253',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642253',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0258',
                'phone_no' => '0700000258',
                'email' => 'emp@adrian258.com',
                'password' => Hash::make('123456'),
                'nat_id' => '25643098',
                'name' => 'K SIMON KIPRONO',
                'NSSF' => '87345258',
                'KRA_Pin' => '86189258',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 6,
                'type_id' => 1,
                'NHIF' => '3642258',
                'category' => 'Fiber Division'
                ]);
                User::create([
                'employee_no' => 'ADE0259',
                'phone_no' => '0700000259',
                'email' => 'emp@adrian259.com',
                'password' => Hash::make('123456'),
                'nat_id' => '2241180',
                'name' => 'MACHARIA SIMON GATAKA',
                'NSSF' => '87345259',
                'KRA_Pin' => '86189259',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 5,
                'type_id' => 1,
                'NHIF' => '3642259',
                'category' => 'Construction Division'
                ]);
                User::create([
                'employee_no' => 'ADE0261',
                'phone_no' => '0700000261',
                'email' => 'emp@adrian261.com',
                'password' => Hash::make('123456'),
                'nat_id' => '26911677',
                'name' => 'OMARI SIMON',
                'NSSF' => '87345261',
                'KRA_Pin' => '86189261',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 6,
                'type_id' => 1,
                'NHIF' => '3642261',
                'category' => 'Fiber Division'
                ]);
                User::create([
                'employee_no' => 'ADE0262',
                'phone_no' => '0700000262',
                'email' => 'emp@adrian262.com',
                'password' => Hash::make('123456'),
                'nat_id' => '779258',
                'name' => 'NTENSIBE SIXTUS',
                'NSSF' => '87345262',
                'KRA_Pin' => '86189262',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 4,
                'type_id' => 1,
                'NHIF' => '3642262',
                'category' => 'MS Division'
                ]);
                User::create([
                'employee_no' => 'ADE0264',
                'phone_no' => '0700000264',
                'email' => 'emp@adrian264.com',
                'password' => Hash::make('123456'),
                'nat_id' => '23913997',
                'name' => 'MUIA STANLEY MUSEMBI',
                'NSSF' => '87345264',
                'KRA_Pin' => '86189264',
                'avatar' => 'avatar_adrian.png',
                'active' => 0,
                'department_id' => 1,
                'type_id' => 1,
                'NHIF' => '3642264',
                'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0265',
                    'phone_no' => '0700000265',
                    'email' => 'emp@adrian265.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '26121819',
                    'name' => 'SABABU STEPHEN NYAGWENCHA',
                    'NSSF' => '87345265',
                    'KRA_Pin' => '86189265',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '3642265',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0266',
                    'phone_no' => '0700000266',
                    'email' => 'emp@adrian266.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22017542',
                    'name' => 'KIBE STEPHEN',
                    'NSSF' => '87345266',
                    'KRA_Pin' => '86189266',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642266',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0267',
                    'phone_no' => '0700000267',
                    'email' => 'emp@adrian267.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22177206',
                    'name' => 'NDIVO STEPHEN KIMONYI',
                    'NSSF' => '87345267',
                    'KRA_Pin' => '86189267',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '3642267',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0268',
                    'phone_no' => '0700000268',
                    'email' => 'emp@adrian268.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25833251',
                    'name' => 'NGANGA STEPHEN',
                    'NSSF' => '87345268',
                    'KRA_Pin' => '86189268',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642268',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0269',
                    'phone_no' => '0700000269',
                    'email' => 'emp@adrian269.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25022870',
                    'name' => 'ADAMS STEVE SEKO',
                    'NSSF' => '87345269',
                    'KRA_Pin' => '86189269',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '3642269',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0271',
                    'phone_no' => '0700000271',
                    'email' => 'emp@adrian271.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22669696',
                    'name' => 'COLLINS SUNDAY OSUMBA',
                    'NSSF' => '87345271',
                    'KRA_Pin' => '86189271',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '3642271',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0272',
                    'phone_no' => '0700000272',
                    'email' => 'emp@adrian272.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '20659790',
                    'name' => 'WAMBUI TERESIAH BURUGU',
                    'NSSF' => '87345272',
                    'KRA_Pin' => '86189272',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 3,
                    'type_id' => 3,
                    'NHIF' => '3642272',
                    'category' => 'Administration'
                ]);
                User::create([
                    'employee_no' => 'ADE0273',
                    'phone_no' => '0700000273',
                    'email' => 'emp@adrian273.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '14515985',
                    'name' => 'W THERESIA GATHEKIA',
                    'NSSF' => '87345273',
                    'KRA_Pin' => '86189273',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642273',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0274',
                    'phone_no' => '0700000274',
                    'email' => 'emp@adrian274.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22246523',
                    'name' => 'MURIUKI TIMOTHY',
                    'NSSF' => '87345274',
                    'KRA_Pin' => '86189274',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642274',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0275',
                    'phone_no' => '0700000275',
                    'email' => 'emp@adrian275.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30134412',
                    'name' => 'KURIA TITUS MBUGUA',
                    'NSSF' => '87345275',
                    'KRA_Pin' => '86189275',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642275',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0277',
                    'phone_no' => '0700000277',
                    'email' => 'emp@adrian277.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28412879',
                    'name' => 'W VERONICAH WANJEMA',
                    'NSSF' => '87345277',
                    'KRA_Pin' => '86189277',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '3642277',
                    'category' => 'Warehousing'
                ]);
                User::create([
                    'employee_no' => 'ADE0278',
                    'phone_no' => '0700000278',
                    'email' => 'emp@adrian278.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30289364',
                    'name' => 'MINOO VICTORIA NGANDA',
                    'NSSF' => '87345278',
                    'KRA_Pin' => '86189278',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '3642278',
                    'category'=>'Department Free'
                ]);
                User::create([
                    'employee_no' => 'ADE0279',
                    'phone_no' => '0700000279',
                    'email' => 'emp@adrian279.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '31553952',
                    'name' => 'KEYA VINCENT MABESE',
                    'NSSF' => '87345279',
                    'KRA_Pin' => '86189279',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '3642279',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0280',
                    'phone_no' => '0700000280',
                    'email' => 'emp@adrian280.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25271285',
                    'name' => 'OMONDI VINCENT',
                    'NSSF' => '87345280',
                    'KRA_Pin' => '86189280',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642280',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0281',
                    'phone_no' => '0700000281',
                    'email' => 'emp@adrian281.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22590512',
                    'name' => 'NAWIRE VIOLET KALOMBA',
                    'NSSF' => '87345281',
                    'KRA_Pin' => '86189281',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '3642281',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0282',
                    'phone_no' => '0700000282',
                    'email' => 'emp@adrian282.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23134001',
                    'name' => 'KANDIE WILFRED',
                    'NSSF' => '87345282',
                    'KRA_Pin' => '86189282',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '3642282',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0283',
                    'phone_no' => '0700000283',
                    'email' => 'emp@adrian283.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27934501',
                    'name' => 'MALOMBE WILLIAM',
                    'NSSF' => '87345283',
                    'KRA_Pin' => '86189283',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '3642283',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0284',
                    'phone_no' => '0700000284',
                    'email' => 'emp@adrian284.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23455226',
                    'name' => 'MWAURA WILLIAM',
                    'NSSF' => '87345284',
                    'KRA_Pin' => '86189284',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '3642284',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0438',
                    'phone_no' => '0700000438',
                    'email' => 'emp@adrian438.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '00000438',
                    'name' => 'RUTH NYAOKE JOGOO',
                    'NSSF' => '8743884',
                    'KRA_Pin' => '86189284',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '3643884',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0285',
                    'phone_no' => '0700000285',
                    'email' => 'emp@adrian285.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21129157',
                    'name' => 'MAIYO WILSON KIPTOO',
                    'NSSF' => '87345285',
                    'KRA_Pin' => '86189285',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '3642285',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0289',
                    'phone_no' => '0700000289',
                    'email' => 'emp@adrian289.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29217108',
                    'name' => 'BENSON KINGANGI KIMONDO',
                    'NSSF' => '87345289',
                    'KRA_Pin' => '86189289',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642289',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0291',
                    'phone_no' => '0700000291',
                    'email' => 'emp@adrian291.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '21563507',
                    'name' => 'FARUS ISMAIL MOHAMED',
                    'NSSF' => '87345291',
                    'KRA_Pin' => '86189291',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '3642291',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0297',
                    'phone_no' => '0700000297',
                    'email' => 'emp@adrian297.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28125518',
                    'name' => 'MUURU KEVIN IRUNGU',
                    'NSSF' => '87345297',
                    'KRA_Pin' => '86189297',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '3642297',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0301',
                    'phone_no' => '0700000301',
                    'email' => 'emp@adrian301.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22930456',
                    'name' => 'NDUNGU HELLEN WACHINGA',
                    'NSSF' => '98345301',
                    'KRA_Pin' => '97189301',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742301',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0302',
                    'phone_no' => '0700000302',
                    'email' => 'emp@adrian302.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23807371',
                    'name' => 'GITONGA PENINA MIRIKO',
                    'NSSF' => '98345302',
                    'KRA_Pin' => '97189302',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742302',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0305',
                    'phone_no' => '0700000305',
                    'email' => 'emp@adrian305.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25504957',
                    'name' => 'KAMAU MOSES MUNGAI',
                    'NSSF' => '98345305',
                    'KRA_Pin' => '97189305',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742305',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0306',
                    'phone_no' => '0700000306',
                    'email' => 'emp@adrian306.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '30099475',
                    'name' => 'MARTIN VINCENT MALUKI',
                    'NSSF' => '98345306',
                    'KRA_Pin' => '97189306',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742306',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0309',
                    'phone_no' => '0700000309',
                    'email' => 'emp@adrian309.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25752776',
                    'name' => 'GOR DANIEL NELSON OTIENO',
                    'NSSF' => '98345309',
                    'KRA_Pin' => '97189309',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '4742309',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0311',
                    'phone_no' => '0700000311',
                    'email' => 'emp@adrian311.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '22448526',
                    'name' => 'KOSGEI ABIGAEL JEPKEMBOI',
                    'NSSF' => '98345311',
                    'KRA_Pin' => '97189311',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742311',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0312',
                    'phone_no' => '0700000312',
                    'email' => 'emp@adrian312.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28318406',
                    'name' => 'ROTICH MESHACK KIBET',
                    'NSSF' => '98345312',
                    'KRA_Pin' => '97189312',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742312',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0313',
                    'phone_no' => '0700000313',
                    'email' => 'emp@adrian313.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25582231',
                    'name' => 'SANG JOSPHAT',
                    'NSSF' => '98345313',
                    'KRA_Pin' => '97189313',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742313',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0314',
                    'phone_no' => '0700000314',
                    'email' => 'emp@adrian314.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27737669',
                    'name' => 'MUHORO LILIAN WANGARI',
                    'NSSF' => '98345314',
                    'KRA_Pin' => '97189314',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '4742314',
                    'category' => 'Finance'
                ]);
                User::create([
                    'employee_no' => 'ADE0318',
                    'phone_no' => '0700000318',
                    'email' => 'emp@adrian318.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24465492',
                    'name' => 'BOIT NIXON KIBIWWOT',
                    'NSSF' => '98345318',
                    'KRA_Pin' => '97189318',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742318',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0319',
                    'phone_no' => '0700000319',
                    'email' => 'emp@adrian319.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25986181',
                    'name' => 'CHERUIYOT WILLIAM KIPTOO',
                    'NSSF' => '98345319',
                    'KRA_Pin' => '97189319',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742319',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0320',
                    'phone_no' => '0700000320',
                    'email' => 'emp@adrian320.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27659853',
                    'name' => 'KIPROTICH JOB KIRUI',
                    'NSSF' => '98345320',
                    'KRA_Pin' => '97189320',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742320',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0321',
                    'phone_no' => '0700000321',
                    'email' => 'emp@adrian321.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25888762',
                    'name' => 'MAIYO RONALD KIPROTICH',
                    'NSSF' => '98345321',
                    'KRA_Pin' => '97189321',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742321',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0325',
                    'phone_no' => '0700000325',
                    'email' => 'emp@adrian325.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '32493018',
                    'name' => 'CHERE ALEX NGANGA',
                    'NSSF' => '98345325',
                    'KRA_Pin' => '97189325',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '4742325',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0327',
                    'phone_no' => '0700000327',
                    'email' => 'emp@adrian327.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25756979',
                    'name' => 'MUCHIRI GEORGE NGUGI',
                    'NSSF' => '98345327',
                    'KRA_Pin' => '97189327',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 2,
                    'type_id' => 1,
                    'NHIF' => '4742327',
                    'category' => 'Logistics'
                ]);
                User::create([
                    'employee_no' => 'ADE0328',
                    'phone_no' => '0700000328',
                    'email' => 'emp@adrian328.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '23932380',
                    'name' => 'KARIUKI JOHN NJOGU',
                    'NSSF' => '98345328',
                    'KRA_Pin' => '97189328',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 5,
                    'type_id' => 1,
                    'NHIF' => '4742328',
                    'category' => 'Construction Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0330',
                    'phone_no' => '0700000330',
                    'email' => 'emp@adrian330.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '25888059',
                    'name' => 'NZONGO SHEDRACK MUITHI',
                    'NSSF' => '98345330',
                    'KRA_Pin' => '97189330',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742330',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0333',
                    'phone_no' => '0700000333',
                    'email' => 'emp@adrian333.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28023116',
                    'name' => 'HAJI ABDISITAR OMAR',
                    'NSSF' => '98345333',
                    'KRA_Pin' => '97189333',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742333',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0334',
                    'phone_no' => '0700000334',
                    'email' => 'emp@adrian334.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24496537',
                    'name' => 'CHEPKWONY GIDEON KIPKIRUI',
                    'NSSF' => '98345334',
                    'KRA_Pin' => '97189334',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '4742334',
                    'category' => 'Finance'
                ]);
                User::create([
                    'employee_no' => 'ADE0335',
                    'phone_no' => '0700000335',
                    'email' => 'emp@adrian335.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29499376',
                    'name' => 'KIPKIRUI CHERUYOT',
                    'NSSF' => '98345335',
                    'KRA_Pin' => '97189335',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742335',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0336',
                    'phone_no' => '0700000336',
                    'email' => 'emp@adrian336.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '13510624',
                    'name' => 'GATHIRWA JOHN KARIUKI',
                    'NSSF' => '98345336',
                    'KRA_Pin' => '97189336',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '4742336',
                    'category' => 'Administration'
                ]);
                User::create([
                    'employee_no' => 'ADE0337',
                    'phone_no' => '0700000337',
                    'email' => 'emp@adrian337.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29696018',
                    'name' => 'MUNGAI EDWIN NJOGU',
                    'NSSF' => '98345337',
                    'KRA_Pin' => '97189337',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '4742337',
                    'category' => 'Health & Safety'
                ]);
                User::create([
                    'employee_no' => 'ADE0340',
                    'phone_no' => '0700000340',
                    'email' => 'emp@adrian340.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28516732',
                    'name' => 'SONNY MWANDIKI',
                    'NSSF' => '98345340',
                    'KRA_Pin' => '97189340',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742340',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0341',
                    'phone_no' => '0700000341',
                    'email' => 'emp@adrian341.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27837185',
                    'name' => 'LANGAT GIBEON KIPNGENO',
                    'NSSF' => '98345341',
                    'KRA_Pin' => '97189341',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742341',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0342',
                    'phone_no' => '0700000342',
                    'email' => 'emp@adrian342.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27742996',
                    'name' => 'TANUI MAUREEN JEBET',
                    'NSSF' => '98345342',
                    'KRA_Pin' => '97189342',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742342',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0343',
                    'phone_no' => '0700000343',
                    'email' => 'emp@adrian343.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '34862093',
                    'name' => 'WANJIRU MARVIN KAMAU',
                    'NSSF' => '98345343',
                    'KRA_Pin' => '97189343',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742343',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0344',
                    'phone_no' => '0700000344',
                    'email' => 'emp@adrian344.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '24380253',
                    'name' => 'JOSHUA PHYLLIS MBITHE',
                    'NSSF' => '98345344',
                    'KRA_Pin' => '97189344',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742344',
                    'category' => 'MS Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0345',
                    'phone_no' => '0700000345',
                    'email' => 'emp@adrian345.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '27833448',
                    'name' => 'KOECH SIMION CHERUIYOT',
                    'NSSF' => '98345345',
                    'KRA_Pin' => '97189345',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742345',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0346',
                    'phone_no' => '0700000346',
                    'email' => 'emp@adrian346.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28921820',
                    'name' => 'KIMASAR SAMMY RERIMOI',
                    'NSSF' => '98345346',
                    'KRA_Pin' => '97189346',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742346',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0347',
                    'phone_no' => '0700000347',
                    'email' => 'emp@adrian347.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '29710157',
                    'name' => 'WAITHAKA JANE WAMBUI',
                    'NSSF' => '98345347',
                    'KRA_Pin' => '97189347',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '4742347',
                    'category' => 'Business Development'
                ]);
                User::create([
                    'employee_no' => 'ADE0348',
                    'phone_no' => '0700000348',
                    'email' => 'emp@adrian348.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '20718827',
                    'name' => 'KAHARA DAVID NJENGA',
                    'NSSF' => '98345348',
                    'KRA_Pin' => '97189348',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 6,
                    'type_id' => 1,
                    'NHIF' => '4742348',
                    'category' => 'Fiber Division'
                ]);
                User::create([
                    'employee_no' => 'ADE0350',
                    'phone_no' => '0700000350',
                    'email' => 'emp@adrian350.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28473624',
                    'name' => 'AFANDA EUGENE ODARI',
                    'NSSF' => '98345350',
                    'KRA_Pin' => '97189350',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 1,
                    'type_id' => 1,
                    'NHIF' => '4742350',
                    'category' => 'Health & Safety'
                ]);
                User::create([
                    'employee_no' => 'ADE0351',
                    'phone_no' => '0700000351',
                    'email' => 'emp@adrian351.com',
                    'password' => Hash::make('123456'),
                    'nat_id' => '28362091',
                    'name' => 'OTIENO KEVIN OUMA',
                    'NSSF' => '98345351',
                    'KRA_Pin' => '97189351',
                    'avatar' => 'avatar_adrian.png',
                    'active' => 0,
                    'department_id' => 4,
                    'type_id' => 1,
                    'NHIF' => '4742351',
                    'category' => 'MS Division'
                ]);
                    User::create([
                        'employee_no' => 'ADE0352',
                        'phone_no' => '0700000352',
                        'email' => 'emp@adrian352.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30736464',
                        'name' => 'MACHANJA JONATHAN MWADIME',
                        'NSSF' => '98345352',
                        'KRA_Pin' => '97189352',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742352',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0353',
                        'phone_no' => '0700000353',
                        'email' => 'emp@adrian353.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '29266560',
                        'name' => 'MWANGI GEOFFREY MURIU',
                        'NSSF' => '98345353',
                        'KRA_Pin' => '97189353',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742353',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0354',
                        'phone_no' => '0700000354',
                        'email' => 'emp@adrian354.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '29534449',
                        'name' => 'KARANJA CLIFFORD IRERI',
                        'NSSF' => '98345354',
                        'KRA_Pin' => '97189354',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742354',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0356',
                        'phone_no' => '0700000356',
                        'email' => 'emp@adrian356.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30218924',
                        'name' => 'MAINA ISAAC KAGWI',
                        'NSSF' => '98345356',
                        'KRA_Pin' => '97189356',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742356',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0357',
                        'phone_no' => '0700000357',
                        'email' => 'emp@adrian357.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32565664',
                        'name' => 'ESTHER RACHAEL KANINI',
                        'NSSF' => '98345357',
                        'KRA_Pin' => '97189357',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742357',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0358',
                        'phone_no' => '0700000358',
                        'email' => 'emp@adrian358.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28960922',
                        'name' => 'GILBERT MELLY KIPLIMO',
                        'NSSF' => '98345358',
                        'KRA_Pin' => '97189358',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742358',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0360',
                        'phone_no' => '0700000360',
                        'email' => 'emp@adrian360.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32676235',
                        'name' => 'NYABUTI GREGORY MONYORO',
                        'NSSF' => '98345360',
                        'KRA_Pin' => '97189360',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742360',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0361',
                        'phone_no' => '0700000361',
                        'email' => 'emp@adrian361.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '25244342',
                        'name' => 'KOECH GEOFFREY',
                        'NSSF' => '98345361',
                        'KRA_Pin' => '97189361',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742361',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0362',
                        'phone_no' => '0700000362',
                        'email' => 'emp@adrian362.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27765299',
                        'name' => 'JILANI STANLEY MWADIME',
                        'NSSF' => '98345362',
                        'KRA_Pin' => '97189362',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742362',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0364',
                        'phone_no' => '0700000364',
                        'email' => 'emp@adrian364.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30544860',
                        'name' => 'KINGORI ALFRED MAINA',
                        'NSSF' => '98345364',
                        'KRA_Pin' => '97189364',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742364',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0365',
                        'phone_no' => '0700000365',
                        'email' => 'emp@adrian365.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32038816',
                        'name' => 'OTIENO MILDRED AWUOR',
                        'NSSF' => '98345365',
                        'KRA_Pin' => '97189365',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742365',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0367',
                        'phone_no' => '0700000367',
                        'email' => 'emp@adrian367.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '24822398',
                        'name' => 'MURIUKI JAMES MWANGI',
                        'NSSF' => '98345367',
                        'KRA_Pin' => '97189367',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742367',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0368',
                        'phone_no' => '0700000368',
                        'email' => 'emp@adrian368.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '21213365',
                        'name' => 'KIMUTAI ISAIAH KIMAIYO',
                        'NSSF' => '98345368',
                        'KRA_Pin' => '97189368',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742368',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0370',
                        'phone_no' => '0700000370',
                        'email' => 'emp@adrian370.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '3496105',
                        'name' => 'ADENYA SOLOMON EM',
                        'NSSF' => '98345370',
                        'KRA_Pin' => '97189370',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742370',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0371',
                        'phone_no' => '0700000371',
                        'email' => 'emp@adrian371.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32062174',
                        'name' => 'MUTUNE DUNCAN MBITHI',
                        'NSSF' => '98345371',
                        'KRA_Pin' => '97189371',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742371',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0372',
                        'phone_no' => '0700000372',
                        'email' => 'emp@adrian372.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30326953',
                        'name' => 'CHESOMEI EMMANUEL KIPLAGAT',
                        'NSSF' => '98345372',
                        'KRA_Pin' => '97189372',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742372',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0373',
                        'phone_no' => '0700000373',
                        'email' => 'emp@adrian373.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27614759',
                        'name' => 'OWALA ROBERT OMONDI',
                        'NSSF' => '98345373',
                        'KRA_Pin' => '97189373',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742373',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0376',
                        'phone_no' => '0700000376',
                        'email' => 'emp@adrian376.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28799888',
                        'name' => 'ABDULLAHI MOHAMED',
                        'NSSF' => '98345376',
                        'KRA_Pin' => '97189376',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742376',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0377',
                        'phone_no' => '0700000377',
                        'email' => 'emp@adrian377.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '22085563',
                        'name' => 'MATHEKA SIMON KITHUKU',
                        'NSSF' => '98345377',
                        'KRA_Pin' => '97189377',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742377',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0378',
                        'phone_no' => '0700000378',
                        'email' => 'emp@adrian378.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '22862427',
                        'name' => 'KIMOMO BENJAMIN MUELA',
                        'NSSF' => '98345378',
                        'KRA_Pin' => '97189378',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742378',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0381',
                        'phone_no' => '0700000381',
                        'email' => 'emp@adrian381.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '25241257',
                        'name' => 'GATHUNGU PHYLIS WANJA',
                        'NSSF' => '98345381',
                        'KRA_Pin' => '97189381',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742381',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0382',
                        'phone_no' => '0700000382',
                        'email' => 'emp@adrian382.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30981188',
                        'name' => 'NKONGE DORCAS MAKENA',
                        'NSSF' => '98345382',
                        'KRA_Pin' => '97189382',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '4742382',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0383',
                        'phone_no' => '0700000383',
                        'email' => 'emp@adrian383.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '25204206',
                        'name' => 'NGENDO MAGDALENE',
                        'NSSF' => '98345383',
                        'KRA_Pin' => '97189383',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '4742383',
                        'category' => 'Administration'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0384',
                        'phone_no' => '0700000384',
                        'email' => 'emp@adrian384.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27777179',
                        'name' => 'KIMETTO KIPKOECH',
                        'NSSF' => '98345384',
                        'KRA_Pin' => '97189384',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742384',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0385',
                        'phone_no' => '0700000385',
                        'email' => 'emp@adrian385.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '29464119',
                        'name' => 'MUMIA MOUSTAPHA MUMIA',
                        'NSSF' => '98345385',
                        'KRA_Pin' => '97189385',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742385',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0386',
                        'phone_no' => '0700000386',
                        'email' => 'emp@adrian386.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32418114',
                        'name' => 'AMUGUNE HILLARY IFEDHA',
                        'NSSF' => '98345386',
                        'KRA_Pin' => '97189386',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742386',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0387',
                        'phone_no' => '0700000387',
                        'email' => 'emp@adrian387.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28034757',
                        'name' => 'WESONGA EVANS WANZALA',
                        'NSSF' => '98345387',
                        'KRA_Pin' => '97189387',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742387',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0388',
                        'phone_no' => '0700000388',
                        'email' => 'emp@adrian388.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '31670691',
                        'name' => 'KANGOGO DISMAS KIPROP',
                        'NSSF' => '98345388',
                        'KRA_Pin' => '97189388',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742388',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0389',
                        'phone_no' => '0700000389',
                        'email' => 'emp@adrian389.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32088618',
                        'name' => 'GAKUNYI MICHAEL WAINAINA',
                        'NSSF' => '98345389',
                        'KRA_Pin' => '97189389',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742389',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0390',
                        'phone_no' => '0700000390',
                        'email' => 'emp@adrian390.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30673482',
                        'name' => 'MAGOMERE JEAN JERRY',
                        'NSSF' => '98345390',
                        'KRA_Pin' => '97189390',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742390',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0392',
                        'phone_no' => '0700000392',
                        'email' => 'emp@adrian392.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '29868258',
                        'name' => 'MAINA BENARD KIMOTHO',
                        'NSSF' => '98345392',
                        'KRA_Pin' => '97189392',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742392',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0393',
                        'phone_no' => '0700000393',
                        'email' => 'emp@adrian393.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '238000329',
                        'name' => 'KIPKURUI KIPSINDO KIBET',
                        'NSSF' => '98345393',
                        'KRA_Pin' => '97189393',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '4742393',
                        'category' => 'Sales'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0394',
                        'phone_no' => '0700000394',
                        'email' => 'emp@adrian394.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '22255994',
                        'name' => 'OMEKEDE WILFRED OTWANE',
                        'NSSF' => '98345394',
                        'KRA_Pin' => '97189394',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 5,
                        'type_id' => 1,
                        'NHIF' => '4742394',
                        'category' => 'Construction Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0395',
                        'phone_no' => '0700000395',
                        'email' => 'emp@adrian395.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '14724572',
                        'name' => 'CHUMBA EDWIN KIPKOECH',
                        'NSSF' => '98345395',
                        'KRA_Pin' => '97189395',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742395',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0396',
                        'phone_no' => '0700000396',
                        'email' => 'emp@adrian396.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27554221',
                        'name' => 'KORIR BRIAN KIMUTAI',
                        'NSSF' => '98345396',
                        'KRA_Pin' => '97189396',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742396',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0398',
                        'phone_no' => '0700000398',
                        'email' => 'emp@adrian398.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '2555464',
                        'name' => 'KAMAU BOBIC TITUS',
                        'NSSF' => '98345398',
                        'KRA_Pin' => '97189398',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '4742398',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0399',
                        'phone_no' => '0700000399',
                        'email' => 'emp@adrian399.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28994499',
                        'name' => 'KAUWI PETER MWINZI',
                        'NSSF' => '98345399',
                        'KRA_Pin' => '97189399',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '4742399',
                        'category'=>'Department Free'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0400',
                        'phone_no' => '0700000400',
                        'email' => 'emp@adrian400.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '29004912',
                        'name' => 'NJERI MAUREEN MUTHONI',
                        'NSSF' => '14445400',
                        'KRA_Pin' => '18289400',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842400',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0401',
                        'phone_no' => '0700000401',
                        'email' => 'emp@adrian401.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30175352',
                        'name' => 'KIMWA MERCY JEPCHIRCHIR',
                        'NSSF' => '14445401',
                        'KRA_Pin' => '18289401',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842401',
                        'category'=>'Department Free'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0402',
                        'phone_no' => '0700000402',
                        'email' => 'emp@adrian402.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '29373162',
                        'name' => 'SIFUNA DANGLINE',
                        'NSSF' => '14445402',
                        'KRA_Pin' => '18289402',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842402',
                        'category'=>'Department Free'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0403',
                        'phone_no' => '0700000403',
                        'email' => 'emp@adrian403.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32570251',
                        'name' => 'OTIENO SHARON ATIENO',
                        'NSSF' => '14445403',
                        'KRA_Pin' => '18289403',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842403',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0404',
                        'phone_no' => '0700000404',
                        'email' => 'emp@adrian404.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '22551112',
                        'name' => 'MUCHENE JOSPHINE WAMBUI',
                        'NSSF' => '14445404',
                        'KRA_Pin' => '18289404',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842404',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0405',
                        'phone_no' => '0700000405',
                        'email' => 'emp@adrian405.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '31316401',
                        'name' => 'KINYANJUI DENNIS KARIUKI',
                        'NSSF' => '14445405',
                        'KRA_Pin' => '18289405',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842405',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0406',
                        'phone_no' => '0700000406',
                        'email' => 'emp@adrian406.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '23574429',
                        'name' => 'MASAVILU ELVINE',
                        'NSSF' => '14445406',
                        'KRA_Pin' => '18289406',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842406',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0407',
                        'phone_no' => '0700000407',
                        'email' => 'emp@adrian407.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28087447',
                        'name' => 'NDEGWA AGNES WANGARI',
                        'NSSF' => '14445407',
                        'KRA_Pin' => '18289407',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842407',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0408',
                        'phone_no' => '0700000408',
                        'email' => 'emp@adrian408.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27601080',
                        'name' => 'MWANGI FELIX NYAGA',
                        'NSSF' => '14445408',
                        'KRA_Pin' => '18289408',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842408',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0410',
                        'phone_no' => '0700000410',
                        'email' => 'emp@adrian410.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28043280',
                        'name' => 'MADIGA BENTA UNYAGI',
                        'NSSF' => '14445410',
                        'KRA_Pin' => '18289410',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842410',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0411',
                        'phone_no' => '0700000411',
                        'email' => 'emp@adrian411.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32181873',
                        'name' => 'KARIMI BRIAN MWITI',
                        'NSSF' => '14445411',
                        'KRA_Pin' => '18289411',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842411',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0412',
                        'phone_no' => '0700000412',
                        'email' => 'emp@adrian412.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '31422352',
                        'name' => 'KAMWETI WINNIE NJERI',
                        'NSSF' => '14445412',
                        'KRA_Pin' => '18289412',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842412',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0413',
                        'phone_no' => '0700000413',
                        'email' => 'emp@adrian413.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '25377155',
                        'name' => 'NJOROGE AMOS MUIRURI',
                        'NSSF' => '14445413',
                        'KRA_Pin' => '18289413',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842413',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0414',
                        'phone_no' => '0700000414',
                        'email' => 'emp@adrian414.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '28323359',
                        'name' => 'MUTHONI SILAS MUCHANGI',
                        'NSSF' => '14445414',
                        'KRA_Pin' => '18289414',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842414',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0415',
                        'phone_no' => '0700000415',
                        'email' => 'emp@adrian415.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '33248637',
                        'name' => 'WOTHAYA ANTHONY MWANGI',
                        'NSSF' => '14445415',
                        'KRA_Pin' => '18289415',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842415',
                        'category' => 'Administration'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0416',
                        'phone_no' => '0700000416',
                        'email' => 'emp@adrian416.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30758167',
                        'name' => 'MARITIM JOYCE CHELANGAT',
                        'NSSF' => '14445416',
                        'KRA_Pin' => '18289416',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842416',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0417',
                        'phone_no' => '0700000417',
                        'email' => 'emp@adrian417.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '22071045',
                        'name' => 'GICHUKI DANIEL KARANGU',
                        'NSSF' => '14445417',
                        'KRA_Pin' => '18289417',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842417',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0440',
                        'phone_no' => '070000440',
                        'email' => 'emp@adrian440.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '0000440',
                        'name' => 'SYPRINE MARUBE NYATAYA',
                        'NSSF' => '146536417',
                        'KRA_Pin' => '464389417',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5847817',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0441',
                        'phone_no' => '070000441',
                        'email' => 'emp@adrian441.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '0000441',
                        'name' => 'MARTIN MUTISO WAMBUA',
                        'NSSF' => '1536419',
                        'KRA_Pin' => '079897',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5847817',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0442',
                        'phone_no' => '070000442',
                        'email' => 'emp@adrian442.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '0000442',
                        'name' => 'ESTHER wAKONYO NJUMBI',
                        'NSSF' => '15887419',
                        'KRA_Pin' => '0123897',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5847817',
                        'category' => 'Health & Safety'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0418',
                        'phone_no' => '0700000418',
                        'email' => 'emp@adrian418.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32107462',
                        'name' => 'RAJAB ABDALLA',
                        'NSSF' => '14445418',
                        'KRA_Pin' => '18289418',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842418',
                        'category' => 'Warehousing'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0419',
                        'phone_no' => '0700000419',
                        'email' => 'emp@adrian419.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '21385327',
                        'name' => 'GICHURU LOUIS MBURU',
                        'NSSF' => '14445419',
                        'KRA_Pin' => '18289419',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 1,
                        'department_id' => 1,
                        'type_id' => 5,
                        'NHIF' => '5842419',
                        'category' => 'Administration'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0420',
                        'phone_no' => '0700000420',
                        'email' => 'emp@adrian420.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '24234940',
                        'name' => 'IRERI MARTIN NJERU',
                        'NSSF' => '14445420',
                        'KRA_Pin' => '18289420',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842420',
                        'category' => 'Business Development'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0423',
                        'phone_no' => '0700000423',
                        'email' => 'emp@adrian423.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27332243',
                        'name' => 'NDUNGU MARGARET WANJIRA',
                        'NSSF' => '14445423',
                        'KRA_Pin' => '18289423',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 5,
                        'type_id' => 1,
                        'NHIF' => '5842423',
                        'category' => 'Construction Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0424',
                        'phone_no' => '0700000424',
                        'email' => 'emp@adrian424.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '24077212',
                        'name' => 'KIARIE MICHAEL KIHINGO',
                        'NSSF' => '14445424',
                        'KRA_Pin' => '18289424',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842424',
                        'category' => 'Logistics'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0426',
                        'phone_no' => '0700000426',
                        'email' => 'emp@adrian426.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '26325103',
                        'name' => 'MBOGO HARON NYAGA',
                        'NSSF' => '14445426',
                        'KRA_Pin' => '18289426',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842426',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0427',
                        'phone_no' => '0700000427',
                        'email' => 'emp@adrian427.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27844731',
                        'name' => 'KIRUI SIMON NDUNGU',
                        'NSSF' => '14445427',
                        'KRA_Pin' => '18289427',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 1,
                        'NHIF' => '5842427',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0428',
                        'phone_no' => '0700000428',
                        'email' => 'emp@adrian428.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '21980426',
                        'name' => 'KINGA ROBERT MACHARIA',
                        'NSSF' => '14445428',
                        'KRA_Pin' => '18289428',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 6,
                        'type_id' => 2,
                        'NHIF' => '5842428',
                        'category' => 'Fiber Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0429',
                        'phone_no' => '0700000429',
                        'email' => 'emp@adrian429.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '22983541',
                        'name' => 'TUGATT COSMAS KIRUI',
                        'NSSF' => '14445429',
                        'KRA_Pin' => '18289429',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 5,
                        'type_id' => 1,
                        'NHIF' => '5842429',
                        'category' => 'Construction Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0430',
                        'phone_no' => '0700000430',
                        'email' => 'emp@adrian430.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30395386',
                        'name' => 'WANJOHI SYDNEY WAITHAKA',
                        'NSSF' => '14445430',
                        'KRA_Pin' => '18289430',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '5842430',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0431',
                        'phone_no' => '0700000431',
                        'email' => 'emp@adrian431.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '30046337',
                        'name' => 'MDAWIDA STEPHEN MWANGEMI',
                        'NSSF' => '14445431',
                        'KRA_Pin' => '18289431',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '5842431',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0432',
                        'phone_no' => '0700000432',
                        'email' => 'emp@adrian432.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32223832',
                        'name' => 'BARASA TOM WEKESA',
                        'NSSF' => '14445432',
                        'KRA_Pin' => '18289432',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 4,
                        'type_id' => 1,
                        'NHIF' => '5842432',
                        'category' => 'MS Division'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0433',
                        'phone_no' => '0700000433',
                        'email' => 'emp@adrian433.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '21238439',
                        'name' => 'GICHIMU SAMUEL KURIA',
                        'NSSF' => '14445433',
                        'KRA_Pin' => '18289433',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842433',
                        'category' => 'Logistics'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0434',
                        'phone_no' => '0700000434',
                        'email' => 'emp@adrian434.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '31532715',
                        'name' => 'KARENGE DENNIS',
                        'NSSF' => '14445434',
                        'KRA_Pin' => '18289434',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842434',
                        'category' => 'Administration'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0435',
                        'phone_no' => '0700000435',
                        'email' => 'emp@adrian435.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '12579470',
                        'name' => 'BUYAYI PAUL WAFULA',
                        'NSSF' => '14445435',
                        'KRA_Pin' => '18289435',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842435',
                        'category' => 'Finance'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0436',
                        'phone_no' => '0700000436',
                        'email' => 'emp@adrian436.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '27824484',
                        'name' => 'KIHARA VICTORIA WANJIRA',
                        'NSSF' => '14445436',
                        'KRA_Pin' => '18289436',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842436',
                        'category' => 'Administration'
                    ]);
                    User::create([
                        'employee_no' => 'ADE0437',
                        'phone_no' => '0700000437',
                        'email' => 'emp@adrian437.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '32454950',
                        'name' => 'GITAU GIDEON NDUNGI',
                        'NSSF' => '14445437',
                        'KRA_Pin' => '18289437',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 1,
                        'NHIF' => '5842437',
                        'category' => 'Logistics'
                    ]);
                    User::create([
                        'employee_no' => 'ADE00SW',
                        'phone_no' => '0700000000',
                        'email' => 'emp@adriangate.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '2454950',
                        'name' => 'ADRIAN GATE PERSONNEL',
                        'NSSF' => '14445438',
                        'KRA_Pin' => '18289438',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 7,
                        'NHIF' => '5842438',
                        'category' => 'Gate Personnel'
                    ]);
                    User::create([
                        'employee_no' => 'ADE00SR',
                        'phone_no' => '0700000000',
                        'email' => 'emp@adrianrecep.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '0245094950',
                        'name' => 'ADRIAN RECEPTION',
                        'NSSF' => '1445437',
                        'KRA_Pin' => '182437',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 6,
                        'NHIF' => '58424037',
                        'category' => 'Reception'
                    ]);
                    User::create([
                        'employee_no' => 'ADE00SA',
                        'phone_no' => '0700000000',
                        'email' => 'emp@adrianadmin.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '02458094950',
                        'name' => 'ADRIAN ADMIN',
                        'NSSF' => '1445437',
                        'KRA_Pin' => '182437',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 0,
                        'department_id' => 1,
                        'type_id' => 5,
                        'NHIF' => '58424037',
                        'category' => 'Administrator'
                    ]);

                    User::create([
                        'employee_no' => 'ADEADMIN',
                        'phone_no' => '0700000419',
                        'email' => 'admin2@adrian.com',
                        'password' => Hash::make('123456'),
                        'nat_id' => '00000000',
                        'name' => 'ADRIAN ADMIN',
                        'NSSF' => '14445419',
                        'KRA_Pin' => '18289419',
                        'avatar' => 'avatar_adrian.png',
                        'active' => 1,
                        'department_id' => 1,
                        'type_id' => 5,
                        'NHIF' => '5842419',
                        'category' => 'Administrator'
                    ]);

        User::create([
            'employee_no' => 'ADEOOMD',
            'phone_no' => '0700000419',
            'email' => 'adrtempmd@adrian.com',
            'password' => Hash::make('123456'),
            'nat_id' => '0987655',
            'name' => 'ADRIAN TEMP MD',
            'NSSF' => '14445419',
            'KRA_Pin' => '18289419',
            'avatar' => 'avatar_adrian.png',
            'active' => 1,
            'department_id' => 1,
            'type_id' => 5,
            'NHIF' => '5842419',
            'category' => 'Managing Director'
        ]);
        User::create([
            'employee_no' => 'ADEWATCH',
            'phone_no' => '0700000419',
            'email' => 'tempwatch@adrian.com',
            'password' => Hash::make('123456'),
            'nat_id' => '000000000',
            'name' => 'ADRIAN TEMP WATCHMAN',
            'NSSF' => '14445419',
            'KRA_Pin' => '18289419',
            'avatar' => 'avatar_adrian.png',
            'active' => 1,
            'department_id' => 1,
            'type_id' => 5,
            'NHIF' => '5842419',
            'category' => 'Gate Personnel'
        ]);
        User::create([
            'employee_no' => 'ADERECEP',
            'phone_no' => '0700000419',
            'email' => 'temprecep@adrian.com',
            'password' => Hash::make('123456'),
            'nat_id' => '1111111',
            'name' => 'ADRIAN TEMP RECEPTION',
            'NSSF' => '14445419',
            'KRA_Pin' => '18289419',
            'avatar' => 'avatar_adrian.png',
            'active' => 1,
            'department_id' => 1,
            'type_id' => 5,
            'NHIF' => '5842419',
            'category' => 'Reception'
        ]);


        $users = User::all();
        foreach ($users as $user) {
            $u = User::find($user->id);
            LeaveDays::create([
                'annualDays' => config('app_settings.annualLeaveDays'),
                'daysRemaining' => 0,
                'year'  =>  date('Y', strtotime(Carbon::now())),
                'daysGone' => 0,
                'user_id' => $u->id
            ]);
        }


    }
}
