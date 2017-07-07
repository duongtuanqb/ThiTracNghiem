<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([

			'title' => 'Đề thi thử THPT Quốc gia 2017',
			'path_file' => 'files_upload/de-thi-thu-thpt-quoc-gia-2017.pdf',
            'result' => '{"1": "A", "2": "C", "3": "B", "4": "B", "5": "D", "6": "A", "7": "D", "8": "A", "9": "B", "10": "C", "11": "B", "12": "B", "13": "A", "14": "B", "15": "C", "16": "B", "17": "A", "18": "B", "19": "C", "20": "B", "21": "A", "22": "D", "23": "B", "24": "A", "25": "A", "26": "D", "27": "A", "28": "C", "29": "A", "30": "B", "31": "D", "32": "A", "33": "A", "34": "D", "35": "A", "36": "C", "37": "C", "38": "B", "39": "B", "40": "D", "41": "A", "42": "D", "43": "B", "44": "B", "45": "D", "46": "A", "47": "D", "48": "B", "49": "C", "50": "B"}',
			'time' => '90',
            'total' => '50',
            'user_id' => '1',
            'cat_id' => '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            
			]);

        DB::table('posts')->insert([

			'title' => 'Đề thi lý thuyết vật lý',
			'path_file' => 'files_upload/de-thi-ly-thuyet-vat-ly.pdf',
            'result' => '{"1": "B", "2": "A", "3": "B", "4": "A", "5": "C", "6": "A", "7": "C", "8": "B", "9": "B", "10": "C", "11": "B", "12": "C", "13": "B", "14": "C", "15": "B", "16": "D", "17": "B", "18": "B", "19": "D", "20": "C", "21": "D", "22": "D", "23": "C", "24": "C", "25": "B", "26": "B", "27": "C", "28": "B", "29": "A", "30": "D", "31": "D", "32": "B", "33": "C", "34": "C", "35": "C", "36": "C", "37": "C", "38": "C", "39": "C", "40": "C", "41": "C", "42": "C", "43": "C", "44": "C", "45": "C", "46": "D", "47": "D", "48": "B", "49": "C", "50": "A", "51": "B", "52": "D", "53": "A", "54": "A", "55": "C", "56": "A", "57": "D", "58": "B", "59": "D", "60": "B", "61": "D", "62": "A", "63": "D", "64": "D", "65": "B", "66": "D", "67": "B", "68": "A", "69": "D", "70": "C", "71": "D", "72": "B", "73": "D", "74": "A", "75": "D", "76": "B", "77": "D", "78": "D", "79": "B", "80": "D", "81": "C", "82": "B", "83": "D", "84": "B", "85": "D", "86": "B", "87": "D", "88": "B", "89": "D", "90": "B", "91": "D", "92": "B", "93": "D", "94": "B", "95": "D", "96": "B", "97": "D", "98": "B", "99": "A", "100": "D", "101": "C", "102": "B", "103": "A", "104": "C", "105": "B", "106": "C", "107": "C", "108": "B", "109": "B", "110": "B", "111": "B", "112": "B", "113": "B", "114": "B", "115": "C", "116": "D", "117": "D", "118": "C", "119": "B", "120": "C"}',
			'time' => '100',
            'total' => '120',
            'user_id' => '1',
            'cat_id' => '2',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            
			]);

        DB::table('posts')->insert([

			'title' => 'Đề thi mẫu vật lý 2015',
			'path_file' => 'files_upload/de-thi-mau-vat-ly-2015.pdf',
            'result' => '{"1": "C", "2": "B", "3": "B", "4": "C", "5": "A", "6": "C", "7": "C", "8": "A", "9": "C", "10": "A", "11": "C", "12": "B", "13": "C", "14": "C", "15": "C", "16": "B", "17": "B", "18": "C", "19": "C", "20": "B", "21": "C", "22": "B", "23": "C", "24": "B", "25": "C", "26": "B", "27": "D", "28": "B", "29": "D", "30": "B", "31": "D", "32": "C", "33": "B", "34": "C", "35": "D", "36": "C", "37": "C", "38": "B", "39": "D", "40": "C", "41": "B", "42": "D", "43": "B", "44": "C", "45": "B", "46": "C", "47": "B", "48": "C", "49": "B", "50": "B"}',
			'time' => '90',
            'total' => '50',
            'user_id' => '1',
            'cat_id' => '2',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            
			]);
    }
}