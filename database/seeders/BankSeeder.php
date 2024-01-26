<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            ['code' => '002', 'name' => 'Bank Negara Indonesia (BNI)'],
            ['code' => '009', 'name' => 'Bank Rakyat Indonesia (BRI)'],
            ['code' => '014', 'name' => 'Bank Central Asia (BCA)'],
            ['code' => '008', 'name' => 'Bank Mandiri'],
            ['code' => '011', 'name' => 'Bank Danamon'],
            ['code' => '012', 'name' => 'Bank Permata'],
            ['code' => '016', 'name' => 'Bank Panin'],
            ['code' => '019', 'name' => 'Bank Artha Graha Internasional'],
            ['code' => '022', 'name' => 'Bank ICBC Indonesia'],
            ['code' => '031', 'name' => 'Bank Bukopin'],
            ['code' => '033', 'name' => 'Bank KEB Hana Indonesia'],
            ['code' => '037', 'name' => 'Bank BNP Paribas Indonesia'],
            ['code' => '076', 'name' => 'Bank Muamalat'],
            ['code' => '028', 'name' => 'Bank Danamon'],
            ['code' => '030', 'name' => 'Bank Maybank Indonesia'],
            ['code' => '050', 'name' => 'Bank Artha Graha Internasional'],
            ['code' => '052', 'name' => 'Bank Woori Saudara'],
            ['code' => '059', 'name' => 'Bank JTrust Indonesia'],
            ['code' => '069', 'name' => 'Bank Commonwealth'],
            ['code' => '087', 'name' => 'Bank BRI Syariah'],
            ['code' => '130', 'name' => 'Bank Ina Perdana'],
            ['code' => '131', 'name' => 'Bank Mitraniaga'],
            ['code' => '133', 'name' => 'Bank Jago'],
            ['code' => '147', 'name' => 'Bank Bumi Arta'],
            ['code' => '151', 'name' => 'Bank Ganesha'],
            ['code' => '153', 'name' => 'Bank QNB Indonesia'],
            ['code' => '157', 'name' => 'Bank MNC Internasional'],
            ['code' => '161', 'name' => 'Bank Jasa Jakarta'],
            ['code' => '162', 'name' => 'Bank BCA Syariah'],
            ['code' => '164', 'name' => 'Bank Syariah Indonesia'],
            ['code' => '167', 'name' => 'Bank Mandiri Syariah'],
            ['code' => '212', 'name' => 'Bank Tabungan Pensiunan Nasional'],
            ['code' => '405', 'name' => 'Bank DKI'],
            ['code' => '118', 'name' => 'Bank Permata'],
        ];

        foreach ($banks as $bank) {
            Bank::create($bank);
        }
    }
}
