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
                'student_code' => '9081',
                'name_th' => 'ผศ.นพ.วรพล​ อร่ามรัศมีกุล',
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
            1 => array(
                'student_code' => '9016',
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
            2 => array(
                'student_code' => '9092',
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
            3 => array(
                'student_code' => '9038',
                'name_th' => 'นายตติยะ  ชื่นตระกูล',
                'name_eng' => 'Tatiya Chuentragun',
                'nick_name' => 'หมี (ใหญ่)',
                'birth_date' => '5/9/2512',
                'telephone' => '086-779-0910 ,
             081-752-4893',
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
            4 => array(
                'student_code' => '9005',
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
                'student_code' => '9104',
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
            6 => array(
                'student_code' => '9047',
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
            7 => array(
                'student_code' => '9059',
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
            8 => array(
                'student_code' => '9049',
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
            9 => array(
                'student_code' => '9066',
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
            10 => array(
                'student_code' => '9096',
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
            11 => array(
                'student_code' => '9044',
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
            12 => array(
                'student_code' => '9051',
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
            13 => array(
                'student_code' => '9046',
                'name_th' => 'นายธีรเชษฐ์ นันท์ศุภวัฒน์',
                'name_eng' => 'Mr.Teerachet Nantsupawat',
                'nick_name' => 'ปอ',
                'birth_date' => '3/15/2520',
                'telephone' => '852306789',
                'email' => 'teerachet@lanna.co.th',
                'facebook' => 'teerachet-paw',
                'line' => '852306789',
                'affiliation' => 'บริษัท ลานนาคอม จำกัด',
                'position' => 'ประธานเจ้าหน้าที่บริหาร',
                'work_description' => '<div>บริหาร จัดการ กิจการของบริษัท</div><div>ให้บริการ ด้านไอที สำหรับมหาวิทยาลัย เช่น</div><div>ระบบคอมพิวเตอร์เน็ตเวิร์ค ดาต้าเซ็นเตอร์ ระบบโทรศัพท์ กล้องวงจรปิด</div><div>ระบบภาพเสียง ห้องประชุม ห้องอบรม ห้องเรียนอัจฉริยะ ออนไลน์ ไฮบริด</div><div>ลิขสิทธิ์ซอฟต์แวร์ไมโครซอฟท์ ซอฟต์แวร์เรียนภาษาอังกฤษออนไลน์</div><div>ระบบ Smart Workplace Smart Building และระบบปรับอากาศ</div><div><br></div>',
                'profile_image' => '9046_24052022_152504.jpeg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            14 => array(
                'student_code' => '9018',
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
            15 => array(
                'student_code' => '9089',
                'name_th' => 'นางสาวศศิกาญจน์ กันทาธรรม',
                'name_eng' => 'Sasikarn Kantatam',
                'nick_name' => 'แหม่ม',
                'birth_date' => '6/21/2507',
                'telephone' => '915784057',
                'email' => 'Sasikarn_kan@hotmail.com',
                'facebook' => 'NULL',
                'line' => 'NULL',
                'affiliation' => 'สำนักงบประมาณ  สำนักนายกรัฐมนตรี',
                'position' => 'นักวิเคราะห์งบประมาณเชี่ยวชาญ',
                'work_description' => '<p>วิเคราะห์และจัดทำข้อเสนองบประมาณรายจ่ายประจำปีของกองจัดทำงบประมาณด้านเศรษฐกิจ 3 </p>
                <p>รับผิดชอบงบประมาณของกระทรวงพลังงาน กระทรวงแรงงาน และกระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม</p>',
                'profile_image' => '9089_24052022_094513.jpg',
                'group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ),
        );
        // $faker = \Faker\Factory::create();
        // for ($i=0; $i < 100; $i++) { 
        //     DB::table('students')->insert([
        //         'student_code' => $faker->numerify('####'),
        //         'name_th' => $faker->name(),
        //         'name_eng' => $faker->name(),
        //         'nick_name' => $faker->firstName(),
        //         'birth_date' => $faker->date('Y-m-d'),
        //         'telephone' => $faker->phoneNumber,
        //         'email' => $faker->unique()->safeEmail(),
        //         'facebook' => $faker->name(),
        //         'line' => $faker->userName ,
        //         'affiliation' => $faker->company,
        //         'position' => $faker->jobTitle,
        //         'work_description' => $faker->text($maxNbChars = 300),
        //         'group_id' => rand(1, 6),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }
        foreach ($students as $key => $value) {
            DB::table('students')->insert($value);
        }
    }
}
