<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = array(
            0 => array(
                'student_code' => '9001',
                'password' => encrypt('9001'),
                'name_th' => 'นายกกชัย ฉายรัศมีกุล',
                'position' => 'รองผู้ว่าราชการจังหวัดลพบุรี',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 => array(
                'student_code' => '9002',
                'password' => encrypt('9002'),
                'name_th' => 'นางสาวกชนิภา อินทสุวรรณ์',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'ห้างหุ้นส่วนจำกัด ศศิพันธุ์ เนเจอร์ ฮิล วิลเลจ',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            2 => array(
                'student_code' => '9003',
                'password' => encrypt('9003'),
                'name_th' => 'นางกนกนุช ด้วงแดง',
                'position' => 'ผู้เชี่ยวชาญด้านยุทธศาสตร์การงบประมาณ',
                'affiliation' => 'สำนักงบประมาณ',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 => array(
                'student_code' => '9004',
                'password' => encrypt('9004'),
                'name_th' => 'นางกนกพร เดชเดโช',
                'position' => 'นายกองค์การบริหารส่วนจังหวัดนครศรีธรรมราช',
                'affiliation' => 'องค์การบริหารส่วนจังหวัดนครศรีธรรมราช',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            4 => array(
                'student_code' => '9005',
                'password' => encrypt('9005'),
                'name_th' => 'นางสาวกนิษฐา กังสวนิช',
                'name_eng' => 'KANITHA KUNGSAWANICH',
                'nick_name' => 'ก้อย',
                'birth_date' => '11/27/2515',
                'telephone' => '091 516 9155',
                'email' => 'kanitha.pinkie@gmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'กรมทรัพย์สินทางปัญญากระทรวงพาณิชย์',
                'position' => 'รองอธิบดี',
                'work_description' => '<p>&nbsp; &nbsp; &nbsp; กำกับดูแลงาน</p>
                <ol><li>จดทะเบียนสิทธิบัตรและอนุสิทธิบัตร และการอบรมตัวแทนสิทธิบัตร</li><li>จดทะเบียนออกแบบผลิตภัณฑ์</li><li>ขึ้นทะเบียนสิ่งบ่งชี้ทางภูมิศาสตร์</li><li>ความร่วมมือระหว่างประเทศด้านทรัพย์สินทางปัญญา</li><li>ส่งเสริมการนำทรัพย์สินทางปัญญาไปใช้ประโยชน์เชิงพาณิชย์</li></ol>',
                'profile_image' => '9005_24052022_072726.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            5 => array(
                'student_code' => '9006',
                'password' => encrypt('9006'),
                'name_th' => 'นายกษาปณ์ เงินรวง',
                'position' => 'รองผู้จัดการ',
                'affiliation' => 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            6 => array(
                'student_code' => '9007',
                'password' => encrypt('9007'),
                'name_th' => 'นางกาญจนา ศรีชมภู',
                'position' => 'ผู้จัดการฝ่ายแผนและงบประมาณ',
                'affiliation' => 'สำนักงานหลักประกันสุขภาพแห่งชาติ',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            7 => array(
                'student_code' => '9008',
                'password' => encrypt('9008'),
                'name_th' => 'รองศาสตราจารย์ ดร.กิตติพงษ์ เกียรติวัชรชัย',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยสุโขทัยธรรมาธิราช',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            8 => array(
                'student_code' => '9009',
                'password' => encrypt('9009'),
                'name_th' => 'นางกิตติมา นพทีปกังวาล',
                'position' => 'กรรมการบริหาร',
                'affiliation' => 'บริษัท สหสินไทย ค้าวัตถุก่อสร้าง จำกัด',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            9 => array(
                'student_code' => '9010',
                'password' => encrypt('9010'),
                'name_th' => 'พลอากาศตรี ขจรศักดิ์ พ่วงจินดา',
                'position' => 'ผู้อำนวยการสำนักบริหารงบประมาณ สำนักงานปลัดบัญชีทหารอากาศ',
                'affiliation' => 'กองทัพอากาศ',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            10 => array(
                'student_code' => '9011',
                'password' => encrypt('9011'),
                'name_th' => 'นายแพทย์ ขวัญชัย วิศิษฐานนท์',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมการแพทย์แผนไทยและการแพทย์ทางเลือก',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            11 => array(
                'student_code' => '9012',
                'password' => encrypt('9012'),
                'name_th' => 'นางเข็มเพ็ชร เวชทรัพย์',
                'position' => 'หัวหน้าสำนักงานผู้อำนวยการ',
                'affiliation' => 'สำนักงานสลากกินแบ่งรัฐบาล',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            12 => array(
                'student_code' => '9013',
                'password' => encrypt('9013'),
                'name_th' => 'นายคมกริช เจริญพัฒนสมบัติ',
                'position' => 'รองผู้ว่าราชการจังหวัดประจวบคีรีขันธ์',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            13 => array(
                'student_code' => '9014',
                'password' => encrypt('9014'),
                'name_th' => 'นายกองโท ดร.คมคาย อุดรพิมพ์',
                'position' => 'นายกองค์การบริหารส่วนจังหวัดมหาสารคาม',
                'affiliation' => 'องค์การบริหารส่วนจังหวัดมหาสารคาม',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            14 => array(
                'student_code' => '9015',
                'password' => encrypt('9015'),
                'name_th' => 'นายคมสันติ์ เลิศสกุลยั่งยืน',
                'position' => 'รักษาการรองผู้จัดการ',
                'affiliation' => 'สำนักงานบริหารกองทุนเพื่อส่งเสริมการอนุรักษ์พลังงาน',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            15 => array(
                'student_code' => '9016',
                'password' => encrypt('9016'),
                'name_th' => 'นางจงกลนี แก้วสด',
                'name_eng' => 'CHONGKOLNEE KAEWSOD',
                'nick_name' => 'อ้อย',
                'birth_date' => '10/12/2514',
                'telephone' => '818047888',
                'email' => 'aoizpot@gmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'องค์การสวนสัตว์แห่งประเทศไทยในพระบรมราชูปถัมภ์ (อสส.)',
                'position' => 'รองผู้อำนวยการองค์การสวนสัตว์แห่งประเทศไทย สายงานบริหาร',
                'work_description' => 'กำกับดูแลสำนักการเงินและทรัพย์สิน สำนักบริหารยุทธศาสตร์  สำนักบริหารทุนมนุษย์',
                'profile_image' => '9016_24052022_071428.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            16 => array(
                'student_code' => '9017',
                'password' => encrypt('9017'),
                'name_th' => 'นายจรัญ การุณยวัฒน์',
                'position' => 'รักษาการในตำแหน่งผู้เชี่ยวชาญด้านยุทธศาสตร์การงบประมาณ',
                'affiliation' => 'สำนักงบประมาณ',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            17 => array(
                'student_code' => '9018',
                'password' => encrypt('9018'),
                'name_th' => 'นายจักรพันธ์ จินตนาพากานนท์',
                'name_eng' => 'Jakkapan Jintanapakanont',
                'nick_name' => 'จิม',
                'birth_date' => '3/27/2520',
                'telephone' => '086-1458788',
                'email' => 'jakka1000@hotmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'องค์การบริหารส่วนจังหวัดนครนายก',
                'position' => 'นายกองค์การบริหารส่วนจังหวัดนครนายก',
                'work_description' => '<p>1 กำหนดนโยบายโดยไม่ขัดต่อกฎหมาย รับผิดชอบในการบริหารราชการของ อบจ. ให้เป็นไปตาม กฎหมาย ระเบียบ ข้อบังคับ ข้อบัญญัติและนโยบาย</p>
                <p>2 สั่ง อนุญาต อนุมัติ เกี่ยวกับราชการข</p>',
                'profile_image' => '9018_24052022_080710.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            18 => array(
                'student_code' => '9019',
                'password' => encrypt('9019'),
                'name_th' => 'นางสาวจันทนา เล็กสมบูรณ์',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท 500 ไมล์ จำกัด',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            19 => array(
                'student_code' => '9020',
                'password' => encrypt('9020'),
                'name_th' => 'นางชญานันท์ ภักดีจิตต์',
                'position' => 'ผู้ช่วยปลัดกระทรวง',
                'affiliation' => 'สำนักงานปลัดกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            20 => array(
                'student_code' => '9021',
                'password' => encrypt('9021'),
                'name_th' => 'นายชนินทร วรรณวิจิตร',
                'position' => 'รองผู้อำนวยการ',
                'affiliation' => 'องค์การพิพิธภัณฑ์วิทยาศาสตร์แห่งชาติ',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            21 => array(
                'student_code' => '9022',
                'password' => encrypt('9022'),
                'name_th' => 'ดร.ชมภารี ชมภูรัตน์',
                'position' => 'อธิบดี',
                'affiliation' => 'กรมอุตุนิยมวิทยา',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            22 => array(
                'student_code' => '9023',
                'password' => encrypt('9023'),
                'name_th' => 'นายชยชัย แสงอินทร์',
                'position' => 'รองผู้ว่าราชการจังหวัดนครปฐม',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            23 => array(
                'student_code' => '9024',
                'password' => encrypt('9024'),
                'name_th' => 'นางสาวชลลดา แจงทนงค์',
                'position' => 'ผู้อำนวยการกองจัดทำงบประมาณ เขตพื้นที่ 18',
                'affiliation' => 'สำนักงบประมาณ',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            24 => array(
                'student_code' => '9025',
                'password' => encrypt('9025'),
                'name_th' => 'นางสาวชัชพร พินทุวัฒนะ',
                'position' => 'ผู้ตรวจเงินแผ่นดิน (สตภ.12)',
                'affiliation' => 'สำนักงานการตรวจเงินแผ่นดิน',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            25 => array(
                'student_code' => '9026',
                'password' => encrypt('9026'),
                'name_th' => 'นายชูพงศ์ คำจวง',
                'position' => 'นายกองค์การบริหารส่วนจังหวัดสกลนคร',
                'affiliation' => 'องค์การบริหารส่วนจังหวัดสกลนคร',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            26 => array(
                'student_code' => '9027',
                'password' => encrypt('9027'),
                'name_th' => 'นางสาวฐานิจ ธุวานนท์',
                'position' => 'ผู้อำนวยการฝ่ายบัญชีและงบประมาณ',
                'affiliation' => 'การท่องเที่ยวแห่งประเทศไทย',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            27 => array(
                'student_code' => '9028',
                'password' => encrypt('9028'),
                'name_th' => 'นางสาวณัฐฐวรรณ อินทรทิตย์',
                'position' => 'รักษาการในตำแหน่งผู้เชี่ยวชาญด้านยุทธศาสตร์การงบประมาณ',
                'affiliation' => 'สำนักงบประมาณ',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            28 => array(
                'student_code' => '9029',
                'password' => encrypt('9029'),
                'name_th' => 'นายณัฐพงศ์ รอดมี',
                'position' => 'ผู้อำนวยการสํานักส่งเสริมการเมืองภาคพลเมือง',
                'affiliation' => 'สถาบันพระปกเกล้า',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            29 => array(
                'student_code' => '9030',
                'password' => encrypt('9030'),
                'name_th' => 'นายณัฐพล ธีรวุฒิวรเวทย์',
                'position' => 'ผู้อำนวยการสำนักยุทธศาสตร์และงบประมาณ',
                'affiliation' => 'เมืองพัทยา',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            30 => array(
                'student_code' => '9031',
                'password' => encrypt('9031'),
                'name_th' => 'นายณัฐพล อมรชัยยาพิทักษ์',
                'position' => 'รองกรรมการผู้จัดการใหญ่',
                'affiliation' => 'บริษัท ปุ๋ยมหาวงศ์ จำกัด',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            31 => array(
                'student_code' => '9032',
                'password' => encrypt('9032'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ ดร.ณัฐวุฒิ สุวรรณทิพย์',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยราชภัฏสุราษฎร์ธานี',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            32 => array(
                'student_code' => '9033',
                'password' => encrypt('9033'),
                'name_th' => 'แพทย์หญิง ดวงพร ปิณจีเสคิกุล',
                'position' => 'รองผู้อำนวยการสำนักอนามัย',
                'affiliation' => 'กรุงเทพมหานคร',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            33 => array(
                'student_code' => '9034',
                'password' => encrypt('9034'),
                'name_th' => 'รองศาสตราจารย์ ดร.ดวงพร ภู่ผะกา',
                'position' => 'รักษาราชการแทนอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยราชภัฏราชนครินทร์',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            34 => array(
                'student_code' => '9035',
                'password' => encrypt('9035'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ ทันตแพทย์ ดร.ดำรงค์ ดำรงค์ศรี',
                'position' => 'รองคณบดี ฝ่ายบริหารคณะทันตแพทยศาสตร์',
                'affiliation' => 'จุฬาลงกรณ์มหาวิทยาลัย',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            35 => array(
                'student_code' => '9036',
                'password' => encrypt('9036'),
                'name_th' => 'รองศาสตราจารย์ ดร.ดิเรก ธีระภูธร',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยพะเยา',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            36 => array(
                'student_code' => '9037',
                'password' => encrypt('9037'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ ดร.เดือนฉาย ไชยบุตร',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยราชภัฏเพชรบูรณ์',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            37 => array(
                'student_code' => '9038',
                'password' => encrypt('9038'),
                'name_th' => 'นายตติยะ  ชื่นตระกูล',
                'name_eng' => 'Tatiya Chuentragun',
                'nick_name' => 'หมี (ใหญ่)',
                'birth_date' => '5/9/2512',
                'telephone' => '086-779-0910, 081-752-4893',
                'email' => 'tatiya@gistda.or.th',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'สำนักงานพัฒนาเทคโนโลยีอวกาศและภูมิสารสนเทศ (สทอภ./GISTDA) กระทรวงอว.',
                'position' => 'รองผู้อำนวยการสทอภ.',
                'work_description' => '<p>ดูแลภารกิจ Stakeholder Engagement ประกอบด้วย</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1. งานด้านการจัดการภาพลักษณ์องค์กรและการประชาสัมพันธ์</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2. งานความร่วมมือ ความสัมพันธ์และพัฒนาเครือข่ายพันธมิตร ทั้งภายใน ต่างประเทศและองค์กรระหว่างประเทศรวมถึงงานการพัฒนาและสร้างเครือข่าย ความร่วมมือทางวิชาการกับภาคการศึกษาและมหาวิทยาลัย</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3. งานด้านการบริการ ส่งเสริมธรุกิจ การตลาด ความสัมพันธ์ผู้ใช้งาน และเครือข่ายการบริการในอุสาหกรรมอวกาศและภูมิสารสนเทศ</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4. การพัฒนาหลักสูตรและจัดฝึกอบรมบุคคลากรภายนอกด้านอวกาศ และภูมิสารสนเทศและสร้างบุคลากรพร้อมใช้ให้อุตสาหกรรมที่เกี่ยวข้อง</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5. งานการสร้างความตระหนักและการรับรู้การใช้ประโยชน์ใน เทคโนโลยีอวกาศอละภูมิสารสนเทศ รวมถึงการสร้างแรงบันดาลใจให้แก่ เด็ก เยาวชนและประชาชนทั่วไป</p>',
                'profile_image' => '9038_24052022_072726.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            38 => array(
                'student_code' => '9039',
                'password' => encrypt('9039'),
                'name_th' => 'นายถาวร ขาวสอาด',
                'position' => 'ผู้อำนวยการสำนักบริหารทรัพย์สิน',
                'affiliation' => 'สำนักงานศาลปกครอง',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            39 => array(
                'student_code' => '9040',
                'password' => encrypt('9040'),
                'name_th' => 'นางสาวเทพิน อริยปิติพันธ์',
                'position' => 'กรรมการบริหาร',
                'affiliation' => 'บริษัท ครีเอท อินเทลลิเจ้นซ์ จำกัด',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            40 => array(
                'student_code' => '9041',
                'password' => encrypt('9041'),
                'name_th' => 'นายธนพล สมิตะโยธิน',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท มิตซูอิมเพรสชั่น จำกัด',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            41 => array(
                'student_code' => '9042',
                'password' => encrypt('9042'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ นายแพทย์ ธนินนิตย์ ลีรพันธ์',
                'position' => 'ผู้อำนวยการศูนย์ศรีพัฒน์ สังกัดคณะแพทยศาสตร์',
                'affiliation' => 'มหาวิทยาลัยเชียงใหม่',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            42 => array(
                'student_code' => '9043',
                'password' => encrypt('9043'),
                'name_th' => 'พลอากาศตรี ธวัชชัย สงวนเรือง',
                'position' => 'ผู้ช่วยผู้อำนวยการสำนักงบประมาณกลาโหม',
                'affiliation' => 'สำนักงานปลัดกระทรวงกลาโหม',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            43 => array(
                'student_code' => '9044',
                'password' => encrypt('9044'),
                'name_th' => 'นางสาวธัญพร สระประทุม',
                'name_eng' => 'Thanyaporn Sapratum',
                'nick_name' => 'อุ้ย',
                'birth_date' => '5/13/2517',
                'telephone' => '099-261-6661, 090-901-4666',
                'email' => 'Thanyaporn.sap@gmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'บริษัท จีอาร์ เทคนิคอล จำกัด, บริษัท ไรโน เอ็นจิเนียริ่ง รับเบอร์ จำกัด',
                'position' => 'กรรมการผู้จัดการ',
                'work_description' => '<p>บริษัท จีอาร์ เทคนิคอล จำกัด&nbsp;</p>
                <p>บริษัท ไรโน เอ็นจิเนียริ่ง รับเบอร์ จำกัด</p>
                <p>(ยุทโธปกรณ์ทางการทหารและตำรวจ, Defenese , security and Intelligence solution)</p>',
                'profile_image' => '9044_24052022_075338.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            44 => array(
                'student_code' => '9045',
                'password' => encrypt('9045'),
                'name_th' => 'นายธาริศร์ อิสสระยั่งยืน',
                'position' => 'รองเลขาธิการ',
                'affiliation' => 'สำนักงานคณะกรรมการนโยบาย เขตพัฒนาพิเศษภาคตะวันออก',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            45 => array(
                'student_code' => '9046',
                'password' => encrypt('9046'),
                'name_th' => 'นายธีรเชษฐ์ นันท์ศุภวัฒน์',
                'name_eng' => 'Mr.Teerachet Nantsupawat',
                'nick_name' => 'ปอ',
                'birth_date' => '3/15/2520',
                'telephone' => '0852306789',
                'email' => 'teerachet@lanna.co.th',
                'facebook' => 'teerachet-paw',
                'line' => '0852306789',
                'affiliation' => 'บริษัท ลานนาคอม จำกัด',
                'position' => 'ประธานเจ้าหน้าที่บริหาร',
                'work_description' => '<div>บริหาร จัดการ กิจการของบริษัท</div><div>ให้บริการ ด้านไอที สำหรับมหาวิทยาลัย เช่น</div><div>ระบบคอมพิวเตอร์เน็ตเวิร์ค ดาต้าเซ็นเตอร์ ระบบโทรศัพท์ กล้องวงจรปิด</div><div>ระบบภาพเสียง ห้องประชุม ห้องอบรม ห้องเรียนอัจฉริยะ ออนไลน์ ไฮบริด</div><div>ลิขสิทธิ์ซอฟต์แวร์ไมโครซอฟท์ ซอฟต์แวร์เรียนภาษาอังกฤษออนไลน์</div><div>ระบบ Smart Workplace Smart Building และระบบปรับอากาศ</div><div><br></div>',
                'profile_image' => '9046_24052022_152504.jpeg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            46 => array(
                'student_code' => '9047',
                'password' => encrypt('9047'),
                'name_th' => 'พ.อ.รศ.ดร.นพ. นครินทร์ ศันสนยุทธ',
                'name_eng' => 'Nakarin SANSANAYUDH',
                'nick_name' => 'นิล',
                'birth_date' => '6/28/2515',
                'telephone' => '089-113-0099',
                'email' => 'dr_nakarin@hotmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'สถาบันวิจัยวิทยาศาสตร์การแพทย์ทหาร(สวพท.) กรมแพทย์ทหารบก',
                'position' => 'รองผู้อำนวยการ',
                'work_description' => '<p>1. งานสอน เป็นอาจารย์แพทย์ เป็นประธานหลักสูตรฝึกอบรมแพทย์เฉพาะทาง เป็นวิทยากรของสมาคมวิชาชีพ</p>
                <p>2. งานบริการ เป็นอายุรแพทย์หัวใจ เชี่ยวชาญการสวนหัวใจและทำบอลลูน</p>
                <p>3. งานวิจัย ดูแล กำกับ และให้คำปรึกษาของ รพ. พระมงกุฏเกล้า และ สวพท.&nbsp;</p>
                <p>4. งานบริหาร เป็น รอง ผ.อ. สวพท.</p>',
                'profile_image' => '9047_24052022_074216.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            47 => array(
                'student_code' => '9048',
                'password' => encrypt('9048'),
                'name_th' => 'ดร.นตพร จันทร์วราสุทธิ์',
                'position' => 'รองผู้อำนวยการ ศูนย์พันธุวิศวกรรมและเทคโนโลยีชีวภาพแห่งชาติ',
                'affiliation' => 'สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            48 => array(
                'student_code' => '9049',
                'password' => encrypt('9049'),
                'name_th' => 'นายนที ดำรงค์',
                'name_eng' => 'Natee Damrong',
                'nick_name' => 'ที',
                'birth_date' => '7/5/2507',
                'telephone' => '081-952-6534',
                'email' => 'Sunshinemayor@hotmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'เทศบาลตำบลสันทรายหลวง',
                'position' => 'นายกเทศมนตรี',
                'work_description' => 'บริหารงานองค์กรปกครองท้องถิ่น ในด้าน  การจัดการสาธารณูปโภค สวัสดิการ สาธารณสุข บรรเทาสาธารณภัย การจัดการสิ่งแวดล้อมชุมชน',
                'profile_image' => '9049_24052022_074801.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            49 => array(
                'student_code' => '9050',
                'password' => encrypt('9050'),
                'name_th' => 'นายนพพร บุญแก้ว',
                'position' => 'ผู้ช่วยปลัดสำนักนายกรัฐมนตรี',
                'affiliation' => 'สำนักงานปลัดสำนักนายกรัฐมนตรี',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            50 => array(
                'student_code' => '9051',
                'password' => encrypt('9051'),
                'name_th' => 'นางนภัสชล ทองสมจิตร',
                'name_eng' => 'Napaschon Thongsomjit',
                'nick_name' => 'ปุ้ม',
                'birth_date' => '4/17/2510',
                'telephone' => '081-900-3696',
                'email' => 'napaschon@nesdc.go.th',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'สำนักงานสภาพัฒนาการเศรษฐกิจและสังคมแห่งชาติ',
                'position' => 'ที่ปรึกษาด้านนโยบายและแผนงาน',
                'work_description' => '<p>รับผิดชอบงานในภารกิจของกองยุทธศาสตร์การวางแผนเศรษฐกิจมหภาค</p>
                <p>การติดตามและรายงานสถานการณ์เศรษฐกิจรายเดือน และรายไตรมาส การให้ความเห็นและข้อเสนอแนะต่อการดำเนินนโยบายการเงินการคลัง การจัดทำแผนการคลังระยะปานกลาง และการกำหนดกรอบวงเงินงบประมาณรายจ่ายประจำปี และเป็นคณะอนุกรรมาธิการการติดตามการปฏิรูปประเทศด้านเศรษฐกิจ วุฒิสภา</p>',
                'profile_image' => '9051_24052022_075836.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            51 => array(
                'student_code' => '9052',
                'password' => encrypt('9052'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ ดร.นฤเบศ ลาภยิ่งยง',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยราชภัฏนครราชสีมา',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            52 => array(
                'student_code' => '9053',
                'password' => encrypt('9053'),
                'name_th' => 'นายนิวัฒน์ ปะระมา',
                'position' => 'นายกเทศมนตรีตำบลเวียงตาล จังหวัดลำปาง',
                'affiliation' => 'เทศบาลตำบลเวียงตาล',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            53 => array(
                'student_code' => '9054',
                'password' => encrypt('9054'),
                'name_th' => 'นายนิสิต สิทธิอาษา',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท เชียงรายแลนด์ แอสโซซิเอทส์ จำกัด',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            54 => array(
                'student_code' => '9055',
                'password' => encrypt('9055'),
                'name_th' => 'นางสาวบุปผา เรืองสุด',
                'position' => 'รองปลัดกระทรวง',
                'affiliation' => 'สำนักงานปลัดกระทรวงแรงงาน',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            55 => array(
                'student_code' => '9056',
                'password' => encrypt('9056'),
                'name_th' => 'นายปราชญา อุ่นเพชรวรากร',
                'name_eng' => 'Pratya Unphetwarakon',
                'nick_name' => 'ทัย',
                'birth_date' => '05/06/2512',
                'telephone' => '061-3971661',
                'email' => 'pratya1969@gmail.com',
                'line' => 'pratya1969',
                'position' => 'รองผู้ว่าราชการจังหวัดกาฬสินธุ์',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'work_description' => 'ทำหน้าที่ช่วยผู้ว่าราชการจังหวัดสั่งราชการและปฏิบัติราชการแทนตามที่ได้รับมอบหมาย ทั้งในด้านการบริหารและการปกครองบังคับบัญชาข้าราชการและลูกจ้าง รวมทั้งการให้คำปรึกษาหารือเกี่ยวกับงานต่าง ๆ',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
                
            ),
            56 => array(
                'student_code' => '9057',
                'password' => encrypt('9057'),
                'name_th' => 'นางสาวปรีญาพร สุวรรณเกษ',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมควบคุมมลพิษ',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            57 => array(
                'student_code' => '9058',
                'password' => encrypt('9058'),
                'name_th' => 'นายแพทย์ปวิทย์ ยวงเงิน',
                'position' => 'รองผู้อำนวยการ โรงพยาบาลกำแพงแสน',
                'affiliation' => 'สำนักงานปลัดกระทรวงสาธารณสุข',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            58 => array(
                'student_code' => '9059',
                'password' => encrypt('9059'),
                'name_th' => 'ผศ.ดร.ปวีณา ลี้ตระกูล',
                'name_eng' => 'Paweena Leetrakun',
                'nick_name' => 'ปุ๋ย',
                'birth_date' => '2/10/2523',
                'telephone' => '081-973-3741',
                'email' => 'paweena.lee@gmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'มหาวิทยาลัยราชภัฏเชียงราย',
                'position' => 'รองอธิการบดี',
                'work_description' => '<p>1. งานสอน เป็นอาจารย์โปรแกรมวิชา เศรษฐศาสตร์ธุรกิจ คณะวิทยาการจัดการ&nbsp;</p>
                <p>2. งานบริการวิชาการ ที่ปรึกษาทำแผนพัฒนาจังหวัด กลุ่มจังหวัด และ องค์กรปกครองส่วนท้องถิ่น&nbsp;</p>
                <p>3. งานวิจัยที่เชี่ยวชาญ เศรษฐศาสตร์พัฒนา และ นโยบายสาธารณะ&nbsp;</p>
                <p>4. งานบริหาร เป็น รองอธิการบดี รับผิดชอบงาน ฝ่ายแผนและยุทธศาสตร์วิจัยและพัฒนา &nbsp;และ ประกันคุณภาพการศึกษาของมหาวิทยาลัย</p>',
                'profile_image' => '9059_24052022_074451.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            59 => array(
                'student_code' => '9060',
                'password' => encrypt('9060'),
                'name_th' => 'นางปัณณิตา สท้านไตรภพ',
                'position' => 'รองเลขาธิการวุฒิสภา',
                'affiliation' => 'สำนักงานเลขาธิการวุฒิสภา',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            60 => array(
                'student_code' => '9061',
                'password' => encrypt('9061'),
                'name_th' => 'ดร.พนม วิญญายอง',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยแม่ฟ้าหลวง',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            61 => array(
                'student_code' => '9062',
                'password' => encrypt('9062'),
                'name_th' => 'นายพรชัย หอมชื่น',
                'position' => 'ผู้ช่วยผู้อำนวยการ',
                'affiliation' => 'สำนักงานส่งเสริมเศรษฐกิจดิจิทัล',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            62 => array(
                'student_code' => '9063',
                'password' => encrypt('9063'),
                'name_th' => 'นางพรนิภา ธนาธรรมนันท์',
                'position' => 'ผู้ช่วยเลขาธิการ',
                'affiliation' => 'สำนักงานศาลยุติธรรม',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            63 => array(
                'student_code' => '9064',
                'password' => encrypt('9064'),
                'name_th' => 'นางพิชญดา หัศภาค',
                'position' => 'ที่ปรึกษาด้านการพัฒนา',
                'affiliation' => 'สำนักงานคณะกรรมการพิเศษเพื่อประสานงานโครงการอันเนื่องมาจากพระราชดำริ',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            64 => array(
                'student_code' => '9065',
                'password' => encrypt('9065'),
                'name_th' => 'นางสาวพิริยาธร สุวรรณมาลา',
                'position' => 'รองผู้อำนวยการ',
                'affiliation' => 'สถาบันเทคโนโลยีนิวเคลียร์แห่งชาติ',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            65 => array(
                'student_code' => '9066',
                'password' => encrypt('9066'),
                'name_th' => 'รศ.ดร.พีระพงษ์ อุฑารสกุล',
                'name_eng' => 'Peerapong Uthansakul',
                'nick_name' => 'หมี (เล็ก)',
                'birth_date' => '5/21/2519',
                'telephone' => '085-086-5588',
                'email' => 'uthansakul@sut.ac.th',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'มหาวิทยาลัยเทคโนโลยีสุรนารี',
                'position' => 'องอธิการบดีฝ่ายยุทธศาสตร์และงบประมาณ',
                'work_description' => '<p>1. งานบริหาร- กำกับดูแลส่วนแผนงาน วางยุทธศาสตร์ของมหาวิทยาลัย กำกับและติดตามการใช้งบประมาณ เลขานุการคณะกรรมการบริหารความเสี่ยงมหาวิทยาลัย ประธานยุทธศาสตร์การขับเคลื่อนดิจิทัล&nbsp;</p>
                <p>2. งานวิจัย- หัวหน้ากลุ่มวิจัยระบบสื่อสารไร้สายและคลื่นสมอง&nbsp;</p>
                <p>3. งานบริการวิชาการ- ขับเคลื่อนอุตสาหกรรมบริการด้วยเทคโนโลยี 5G&nbsp;</p>
                <p>4. งานสอน- Senior Fellow of HEA, สอนสาขาวิชาวิศวกรรมโทรคม</p>',
                'profile_image' => '9066_24052022_074952.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            66 => array(
                'student_code' => '9067',
                'password' => encrypt('9067'),
                'name_th' => 'นายพีระพันธ์ เหมะรัต',
                'position' => 'ผู้ช่วยผู้จัดการ',
                'affiliation' => 'บริษัทบริหารสินทรัพย์ ธนาคารอิสลามแห่งประเทศไทย จำกัด',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            67 => array(
                'student_code' => '9068',
                'password' => encrypt('9068'),
                'name_th' => 'นางเพลินพิศ ศรีภพ',
                'position' => 'นายกเทศมนตรีเมืองตาคลี จังหวัดนครสวรรค์',
                'affiliation' => 'เทศบาลเมืองตาคลี',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            68 => array(
                'student_code' => '9069',
                'password' => encrypt('9069'),
                'name_th' => 'พลเรือตรี ไพศาล ชะโนภาษ',
                'position' => 'รองเจ้ากรมส่งกำลังบำรุงทหารเรือ',
                'affiliation' => 'กองทัพเรือ',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            69 => array(
                'student_code' => '9070',
                'password' => encrypt('9070'),
                'name_th' => 'พลตำรวจตรี ภพพล จักกะพาก',
                'position' => 'ผู้บังคับการกองแผนงานความมั่นคง สำนักงานยุทธศาสตร์ตำรวจ',
                'affiliation' => 'สำนักงานตำรวจแห่งชาติ',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            70 => array(
                'student_code' => '9071',
                'password' => encrypt('9071'),
                'name_th' => 'นายแพทย์ มณเฑียร คณาสวัสดิ์',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมอนามัย',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            71 => array(
                'student_code' => '9072',
                'password' => encrypt('9072'),
                'name_th' => 'นายมนต์ชัย ดานุโพธิ์บริบูรณ์',
                'position' => 'ผู้ช่วยผู้ว่าการ',
                'affiliation' => 'การไฟฟ้าส่วนภูมิภาค',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            72 => array(
                'student_code' => '9073',
                'password' => encrypt('9073'),
                'name_th' => 'นายมนตรี กนกวารี',
                'position' => 'ผู้ทรงคุณวุฒิด้านคดี รักษาราชการแทนรองเลขาธิการสำนักงานศาลรัฐธรรมนูญ',
                'affiliation' => 'สำนักงานศาลรัฐธรรมนูญ',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            73 => array(
                'student_code' => '9074',
                'password' => encrypt('9074'),
                'name_th' => 'นายมนตรี เดชาสกุลสม',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมทางหลวง',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            74 => array(
                'student_code' => '9075',
                'password' => encrypt('9075'),
                'name_th' => 'นางสาวมัลลิกา แสนภักดี',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท ซีเอชดีทัวร์ แอนด์ อีเว้นท์ จำกัด',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            75 => array(
                'student_code' => '9076',
                'password' => encrypt('9076'),
                'name_th' => 'นางสาวยุพาภรณ์ ศิริกิจพาณิชย์กูล',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมบังคับคดี',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            76 => array(
                'student_code' => '9077',
                'password' => encrypt('9077'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ แพทย์หญิง ยุวรีย์ พิชิตโชค',
                'position' => 'รองผู้อำนวยการ โรงพยาบาลจุฬาลงกรณ์',
                'affiliation' => 'สภากาชาดไทย',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            77 => array(
                'student_code' => '9078',
                'password' => encrypt('9078'),
                'name_th' => 'รองศาสตราจารย์ นายแพทย์ รังสรรค์ ภูรยานนทชัย',
                'position' => 'รองคณบดี ฝ่ายบริหาร นโยบายและแผน คณะแพทยศาสตร์',
                'affiliation' => 'มหาวิทยาลัยสงขลานครินทร์',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            78 => array(
                'student_code' => '9079',
                'password' => encrypt('9079'),
                'name_th' => 'นางสาวรานี อิฐรัตน์',
                'position' => 'ผู้อำนวยการกอง 3 รักษาราชการแทนรองผู้อำนวยการ',
                'affiliation' => 'สำนักงานขับเคลื่อนการปฏิรูปประเทศ ยุทธศาสตร์ชาติ และการสร้างความสามัคคีปรองดอง',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            79 => array(
                'student_code' => '9080',
                'password' => encrypt('9080'),
                'name_th' => 'นายฤชา วราทร',
                'position' => 'ผู้อำนวยการกองบริหารการคลัง',
                'affiliation' => 'กรมธนารักษ์',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            80 => array(
                'student_code' => '9081',
                'password' => encrypt('9081'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ นายแพทย์ วรพล อร่ามรัศมีกุล',
                'name_eng' => 'Woraphon Aramrussameekul',
                'nick_name' => 'พล',
                'birth_date' => '2/7/2519',
                'telephone' => '081-689-4343',
                'email' => 'voraphol@g.swu.ac.th',
                'facebook' => 'วรพล​ อร่ามรัศมีกุล',
                'line' => 'Dr.ponSWU',
                'affiliation' => 'คณะแพทยศาสต​ร์ มหาวิทยาลัยศรีครินทรวิโรฒ',
                'position' => 'ผู้ช่วยอธิการบดีฝ่ายองครักษ์​และพัฒนากายภาพ',
                'work_description' => '<p>1.อาจารย์แพทย์ในสาขาเวชศาสตร์ฟื้นฟู สอนนิสิตแพทย์คณะแพทย์ มหาวิทยาลัยศรีนครินทรวิโรฒ</p><p>2.แพทย์เวชศาสตร์ฟื้นฟูดูแลงานบริการผู้ป่วย เช่นในกลุ่มอาการปวด ผู้สูงอายุ อาการข้อเสื่อม อัมพฤกษ์อัมพาต เท้าเบาหวาน เป็นต้น</p><p>3. กำกับดูแลงานบริการงานพัสดุ การเงิน จัดซื้อจัดจ้างและโครงการกิจกรรม ของส่วนพัฒนากายภาพและส่วนพัฒนาความยั่งยืน มหาวิทยาลัยศรีนครินทรวิโรฒ รวมถึงงานด้านเครือข่ายมหาวิทยาลัยยั่งยืนแห่งประเทศไทย</p>',
                'profile_image' => '9081_24052022_121204.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            81 => array(
                'student_code' => '9082',
                'password' => encrypt('9082'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ ดร.วัชรพงษ์ อินทรวงศ์',
                'position' => 'รองอธิการบดี วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร',
                'affiliation' => 'มหาวิทยาลัยเกษตรศาสตร์',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            82 => array(
                'student_code' => '9083',
                'password' => encrypt('9083'),
                'name_th' => 'นางสาววาสนา พงศาปาน',
                'position' => 'ผู้อำนวยการสำนักพัฒนาขีดความสามารถการท่องเที่ยว',
                'affiliation' => 'องค์การบริหารการพัฒนาพื้นที่พิเศษเพื่อการท่องเที่ยวอย่างยั่งยืน',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            83 => array(
                'student_code' => '9084',
                'password' => encrypt('9084'),
                'name_th' => 'ศาสตราจารย์พิเศษ ดร.นายแพทย์ วิชัย เทียนถาวร',
                'position' => 'อธิการบดี',
                'affiliation' => 'สถาบันพระบรมราชชนก',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            84 => array(
                'student_code' => '9085',
                'password' => encrypt('9085'),
                'name_th' => 'นายวิทยา แก้วมี',
                'position' => 'ผู้อำนวยการกองแผนงาน',
                'affiliation' => 'กรมชลประทาน',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            85 => array(
                'student_code' => '9086',
                'password' => encrypt('9086'),
                'name_th' => 'นายไวฑิต โอชวิช',
                'position' => 'ผู้อำนวยการกองวิเคราะห์โครงการ และงบประมาณ',
                'affiliation' => 'สำนักงานทรัพยากรน้ำแห่งชาติ',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            86 => array(
                'student_code' => '9087',
                'password' => encrypt('9087'),
                'name_th' => 'นางศกุณา วิวัฒน์ธนาฒย์',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท พีเคเอส 37 ยูเนียนคอนสตรัคชั่นส์ จำกัด',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            87 => array(
                'student_code' => '9088',
                'password' => encrypt('9088'),
                'name_th' => 'นายศรัณย์พงศ์ ฟุ้งเกียรติ',
                'position' => 'รองเลขาธิการสภาเกษตรกรแห่งชาติ',
                'affiliation' => 'สำนักงานสภาเกษตรกรแห่งชาติ',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            88 => array(
                'student_code' => '9089',
                'password' => encrypt('9089'),
                'name_th' => 'นางสาวศศิกาญจน์ กันทาธรรม',
                'name_eng' => 'Sasikarn Kantatam',
                'nick_name' => 'แหม่ม',
                'birth_date' => '6/21/2507',
                'telephone' => '915784057',
                'email' => 'Sasikarn_kan@hotmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'สำนักงบประมาณ สำนักนายกรัฐมนตรี',
                'position' => 'นักวิเคราะห์งบประมาณเชี่ยวชาญ',
                'work_description' => '<p>วิเคราะห์และจัดทำข้อเสนองบประมาณรายจ่ายประจำปีของกองจัดทำงบประมาณด้านเศรษฐกิจ 3 </p>
                <p>รับผิดชอบงบประมาณของกระทรวงพลังงาน กระทรวงแรงงาน และกระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม</p>',
                'profile_image' => '9089_24052022_094513.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            89 => array(
                'student_code' => '9090',
                'password' => encrypt('9090'),
                'name_th' => 'ดร.เศรษฐพล เลี่ยวไพโรจน์',
                'position' => 'รองประธานกรรมการ',
                'affiliation' => 'บริษัท เอเซียเอ็นจิเนียริ่ง แอนด์ เซอร์วิส (ไทยแลนด์) จำกัด',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            90 => array(
                'student_code' => '9091',
                'password' => encrypt('9091'),
                'name_th' => 'นายสมเกียรติ วิริยะกุลนันท์',
                'position' => 'รองผู้ว่าราชการจังหวัดนครราชสีมา',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            91 => array(
                'student_code' => '9092',
                'password' => encrypt('9092'),
                'name_th' => 'นายสมพงษ์  จิรศิริเลิศ',
                'name_eng' => 'SOMPONG JIRASIRILERT',
                'nick_name' => 'โต',
                'birth_date' => '7/27/2508',
                'telephone' => '065-353-9159',
                'email' => 'sompong.j@md.go.th',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'กรมเจ้าท่า กระทรวงคมนาคม',
                'position' => 'รองอธิบดี กรมเจ้าท่า',
                'work_description' => '<p>กับดูแลงาน</p>
             <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.ด้านการเงิน การคลัง&nbsp;</p>
             <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.ด้านการพัสดุ&nbsp;</p>
             <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3.ด้านงานพัฒนาโครงสร้างพื้นฐานทางน้ำ ทั้งก่อสร้างท่าเทียบเรือ ขุดลอกบำรุงรักษาร่องน้ำทางเดินเรือ ขุดลอกบำรุงรักษาแม่น้ำ ลำคลอง ทะเลภายในน่านน้ำไทย ก่อสร้างและติดตั้งเครื่องหมายการเดินเรือ งานด้านโยธา</p>
             <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;4.ด้านการใช้กฎหมาย พรบ.การเดินเรือในน้ำไทย พุทธศักราช 2456 และที่แก้ไขเพิ่มเติม ,พรบ. เรือไทย พุทธศักราช 2481 และที่แก้ไขเพิ่มเติม</p>
             <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5.ด้านการพัฒนาระบบการปฏิบัติราชการ</p>',
                'profile_image' => '9092_24052022_072112.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            92 => array(
                'student_code' => '9093',
                'password' => encrypt('9093'),
                'name_th' => 'ว่าที่ร้อยตรี สมศักดิ์ พรหมดำ',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมพัฒนาฝีมือแรงงาน',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            93 => array(
                'student_code' => '9094',
                'password' => encrypt('9094'),
                'name_th' => 'นายสรรเพชญ แสงเนตรสว่าง',
                'position' => 'ผู้อำนวยการกองบริหารจัดการทรัพย์สิน',
                'affiliation' => 'สำนักงานป้องกันและปราบปรามการฟอกเงิน',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            94 => array(
                'student_code' => '9095',
                'password' => encrypt('9095'),
                'name_th' => 'นางสาวสรรศิริ บำรุงชีพ',
                'position' => 'ผู้อำนวยการกองจัดทำงบประมาณ เขตพื้นที่ 1',
                'affiliation' => 'สำนักงบประมาณ',
                'group_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ),
            95 => array(
                'student_code' => '9096',
                'password' => encrypt('9096'),
                'name_th' => 'นายสราวุธ ปิตุเตชะ',
                'name_eng' => 'Sarawut Pitutacha',
                'nick_name' => 'บอมบ์',
                'birth_date' => '6/4/2514',
                'telephone' => '084-361-2030',
                'email' => 'wutpitt@gmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'สำนักงานอัยการสูงสุด',
                'position' => 'รองเลขาธิการสำนักงานอัยการสูงสุด',
                'work_description' => '<p>1. สำนักบริหารงบประมาณ สำนักงานอัยการสูงสุด</p>
                <p>2. สำนักบริหารทรัพย์สิน สำนักงานอัยการสูงสุด</p>
                <p>3. สำนักบริหารอาคารและที่ดิน ออกแบบและก่อสร้าง สำนักงานอัยการสูงสุด</p>',
                'profile_image' => '9096_24052022_075138.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            96 => array(
                'student_code' => '9097',
                'password' => encrypt('9097'),
                'name_th' => 'นายสันติ รังษิรุจิ',
                'position' => 'รองผู้ว่าราชการจังหวัดลำปาง',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            97 => array(
                'student_code' => '9098',
                'password' => encrypt('9098'),
                'name_th' => 'นางสาวสาวิตรี ชำนาญกิจ',
                'position' => 'รองเลขาธิการ',
                'affiliation' => 'สำนักเลขาธิการคณะรัฐมนตรี',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            98 => array(
                'student_code' => '9099',
                'password' => encrypt('9099'),
                'name_th' => 'นางสุชยา ลิมโพธิ์ทอง',
                'position' => 'ผู้ช่วยผู้ว่าการ',
                'affiliation' => 'การไฟฟ้านครหลวง',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            99 => array(
                'student_code' => '9100',
                'password' => encrypt('9100'),
                'name_th' => 'นางสุทธดา คงเดชา',
                'position' => 'ผู้อำนวยการสำนักสนับสนุนงานสืบสวนสอบสวน',
                'affiliation' => 'สำนักงานคณะกรรมการการเลือกตั้ง',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            100 => array(
                'student_code' => '9101',
                'password' => encrypt('9101'),
                'name_th' => 'นางสุภาวดี สิทธิมาลัยรัตน์',
                'position' => 'ผู้อำนวยการกองยุทธศาสตร์และแผนงาน',
                'affiliation' => 'กรมบัญชีกลาง',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            101 => array(
                'student_code' => '9102',
                'password' => encrypt('9102'),
                'name_th' => 'นายสุเมธ ตั้งประเสริฐ',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท เด็พธเฟิร์สท จำกัด',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            102 => array(
                'student_code' => '9103',
                'password' => encrypt('9103'),
                'name_th' => 'นายสุรศักดิ์ ปัญญาวุฒิ',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท ไอเอสโอ เอ็นจิเนียริ่ง จำกัด',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            103 => array(
                'student_code' => '9104',
                'password' => encrypt('9104'),
                'name_th' => 'นายสุรัตน์ เมฆะวรากุล',
                'name_eng' => 'Surat Mekavarakul',
                'nick_name' => 'ไมค์',
                'birth_date' => '5/11/2502',
                'telephone' => '081-636-9428',
                'email' => 'suratmike@hotmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'กลุ่มบริษัท ไมค์ จำกัด',
                'position' => 'ประธานกรรมการบริหาร',
                'work_description' => '<p>กิจการ</p>
                <p>ไมค์ ดีพาร์ทเม้นท์สโตร์</p>
                <p>ไมค์ ช้อปปิ้งมอลล์</p>
                <p>ไมค์ โฮเต็ล</p>
                <p>ไมค์บีช รีสอร์ท</p>
                <p>ไมค์ ออร์คิด รีสอร์ท</p>
                <p>บารอนบีช รีสอร์ท</p>
                <p>เคป ดารา รีสอร์ท</p>',
                'profile_image' => '9104_24052022_072726.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            104 => array(
                'student_code' => '9105',
                'password' => encrypt('9105'),
                'name_th' => 'นายไสว นุ่นเส้ง',
                'position' => 'กรรมการผู้จัดการ',
                'affiliation' => 'บริษัท อัพไรท์ ซิมมูเลชั่น จำกัด',
                'group_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ),
            105 => array(
                'student_code' => '9106',
                'password' => encrypt('9106'),
                'name_th' => 'นายอดิทัต วะสีนนท์',
                'position' => 'รองอธิบดี',
                'affiliation' => 'กรมอุตสาหกรรมพื้นฐานและการเหมืองแร่',
                'group_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            106 => array(
                'student_code' => '9107',
                'password' => encrypt('9107'),
                'name_th' => 'นายอธิโชค วินทกร',
                'position' => 'ที่ปรึกษากรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ',
                'affiliation' => 'สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            107 => array(
                'student_code' => '9108',
                'password' => encrypt('9108'),
                'name_th' => 'พลตรี อัฏฐพล ลัดใหม่กุลวัฒน์',
                'position' => 'ผู้อำนวยการสำนักบริหารงบประมาณ สำนักงานปลัดบัญชีกองทัพบก',
                'affiliation' => 'กองทัพบก',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            108 => array(
                'student_code' => '9109',
                'password' => encrypt('9109'),
                'name_th' => 'นายเอกวิทย์ มีเพียร',
                'position' => 'รองผู้ว่าราชการจังหวัดปทุมธานี',
                'affiliation' => 'สำนักงานปลัดกระทรวงมหาดไทย',
                'group_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ),
            109 => array(
                'student_code' => '9110',
                'password' => encrypt('9110'),
                'name_th' => 'ผู้ช่วยศาสตราจารย์ ดร.เอนก เทียนบูชา',
                'position' => 'รองอธิการบดี',
                'affiliation' => 'มหาวิทยาลัยราชภัฏจันทรเกษม',
                'group_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ),
        );
        foreach ($students as $key => $value) {
            DB::table('students')->insert($value);
        }
    }
}
