<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = json_decode(file_get_contents(storage_path('app\public') . '\json\products.json', true))->products;

        $cities = [
            'KENITRA',
            'KENITRA',
            'KENITRA',
            'SIDI-YAHYA',
            'SIDI-YAHYA',
            'SIDI-YAHYA',
            'SIDI-YAHYA',
            'SEFROU',
            'SEFROU',
            'SEFROU',
            'SEFROU',
            'FES',
            'FES',
            'FES',
            'BÉNI-MELLAL',
            'BÉNI-MELLAL',
            'BÉNI-MELLAL',
            'BÉNI-MELLAL',
            'MARRAKECH',
            'MARRAKECH',
            'MARRAKECH'
        ];


        $p_names = [
            ['BLUEBERRY', 'MYRTILLE', ''],
            ['RASPBERRY', 'FRAMBOISE', ''],
            ['BLACKBERRY', 'LA MÛRE', ''],
            ['STRAWBERRY', 'FRAISE', ''],
            ['GOJI BERRY', 'GOJI BERRY', ''],
            ['BLUEBERRY', 'MYRTILLE', ''],
            ['RASPBERRY', 'FRAMBOISE', ''],
            ['PEAR', 'POIRE', ''],
            ['PLUM', 'PRUNE', ''],
            ['APPLE', 'POMME', ''],
            ['CHERRY', 'CERISE', ''],
            ['APRICOT', 'ABRICOT', ''],
            ['PLUM', 'PRUNE', ''],
            ['PEACH / N', 'PÊCHE / N', ''],
            ['POMEGRANATE', 'GRENADE', ''],
            ['PERSIMMON', 'PERSIMMON', ''],
            ['FIG', 'FIGUE', ''],
            ['GOJI BERRY', 'GOJI BERRY', ''],
            ['POMEGRANATE', 'GRENADE', ''],
            ['GRAPE', 'GRAIN DE RAISIN', ''],
            ['SWEET POTATO', 'PATATE DOUCE', ''],
        ];
        $p_desc = [
            'The fiber, potassium, folate, vitamin C, vitamin B6, and phytonutrient content in blueberries helps to reduce the total amount of cholesterol in the blood and decrease the risk of heart disease.',
            'contain strong antioxidants such as Vitamin C, quercetin and gallic acid that fight against cancer, heart and circulatory disease.',
            'Very rich in vitamin, the Blackberries plays a positive role in the prevention of cardiovascular disease, we produce one of the best varieties in the world.',
            'At peak during spring and early summer, strawberries are sweet, tart, and juicy. Apart from their delicious taste, strawberries offer an abundance of health and wellness benefits. A great source of fiber, vitamin C, and antioxidants.',
            'Goji berries are packed with many vitamins, minerals and antioxidants. They’re associated with many health benefits, including improving blood sugar control, helping with weight loss, fighting aging and protecting against cancer.',
            'The fiber, potassium, folate, vitamin C, vitamin B6, and phytonutrient content in blueberries helps to reduce the total amount of cholesterol in the blood and decrease the risk of heart disease.',
            'contain strong antioxidants such as Vitamin C, quercetin and gallic acid that fight against cancer, heart and circulatory disease.',
            'Eating one medium pear provides 12 percent of daily vitamin C needs, as well as 10 percent of vitamin K, 6 percent of potassium and smaller amounts of calcium, iron, magnesium, riboflavin, vitamin B-6, and folate.',
            'Plums are a very nutritious fruit. it’s an excellent source of vitamins, minerals, fiber, and antioxidants. Additionally, it has several characteristics that may reduce the risk of many chronic diseases, such as osteoporosis, cancer, heart disease and diabetes',
            'Apples are extremely rich in important antioxidants, flavonoids, and dietary fiber. The phytonutrients and antioxidants in apples may help reduce the risk of developing cancer, hypertension, diabetes, and heart disease.',
            'Helps Lower the Risk of Heart Disease. Tart cherries can provide similar cardiovascular health benefits like prescribed drugs used to help regulate fat and glucose in patients with metabolic syndrome',
            'Apricots are rich in many plant antioxidants. Overall, the apricot is a great food that provides with the protective effects of antioxidants while adding very few calories to the daily total.',
            'Plums are a very nutritious fruit. it’s an excellent source of vitamins, minerals, fiber, and antioxidants. Additionally, it has several characteristics that may reduce the risk of many chronic diseases, such as osteoporosis, cancer, heart disease and diabetes',
            'Peaches have many health benefits which are related to the nutrients within the peach, such as, the dietary fiber, low carbohydrate, abundant vitamins, including vitamin C, vitamin A, vitamin E, and niacin, as well as minerals, such as, potassium, copper, manganese, and phosphorous',
            'Pomegranate juice contains higher levels of antioxidants than most other fruit juices. It also has three times more antioxidants than green tea. that can help to protect cells from damage, and reduce inflammation.',
            'It is good in many valuable Bcomplex vitamins such as folic acid, pyridoxine (vitamin B-6), thiamin, etc. These vitamins act as co-factors for numerous metabolic enzymatic functions in the body',
            'Figs are rich in minerals including potassium, calcium, magnesium, iron, and copper and are a good source of antioxidant vitamins A and K that contribute to health and wellness',
            'Goji berries are packed with many vitamins, minerals and antioxidants. They’re associated with many health benefits, including improving blood sugar control, helping with weight loss, fighting aging and protecting against cancer.',
            'Pomegranate juice contains higher levels of antioxidants than most other fruit juices. It also has three times more antioxidants than green tea. that can help to protect cells from damage, and reduce inflammation.',
            'The nutrients in grapes may help protect against cancer, eye problems, cardiovascular disease, and other health conditions.',
            'They Have Anti-Inflammatory Effects. Eating sweet potatoes may also help reduce inflammation. This is chiefly due to their high levels of beta-carotene, vitamin C, and magnesium'
        ];
        $p_img = [

            '/images/products/1 (3).jpg',
            '/images/products/1 (12).jpg',
            '/images/products/1 (14).jpg',
            '/images/products/1 (13).jpg',
            '/images/products/1 (15).jpg',
            '/images/products/1 (3).jpg',

            '/images/products/1 (12).jpg',
            '/images/products/1 (2).jpg',
            '/images/products/1 (10).jpg',
            '/images/products/1 (11).jpg',
            '/images/products/1 (8).jpg',
            '/images/products/1 (16).jpg',

            '/images/products/1 (10).jpg',
            '/images/products/1 (17).jpg',
            '/images/products/1 (1).jpg',
            '/images/products/1 (5).jpg',
            '/images/products/1 (6).jpg',
            '/images/products/1 (15).jpg',

            '/images/products/1 (1).jpg',
            '/images/products/1 (18).jpg',
            '/images/products/1 (19).jpg',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-blueberry-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-raspberries-png-raspberries-531-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P4-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-strawberry_PNG2621-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P12-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-blueberry-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-raspberries-png-raspberries-531-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-booy-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P5-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-Large_Red_Apples_PNG_Clipart-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P10-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-300569_thumb-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P5-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-peche.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P9-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-persimmon_PNG9197-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-kar-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P12-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-P9-175.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/grape-175-1.png',
            // 'http://www.ehm.ma/wp-content/uploads/2016/11/175x-sweet-potato-175.png'
        ];

        for ($index = 0; $index < count($p_desc); $index++) {
            $product = new Product;
            // $p->fill((array)$product);
            $product->name_fr = $p_names[$index][1];
            $product->name_en = $p_names[$index][0];
            $product->name_ar = 'ar_' . $index;
            $product->description_fr =  'desc_fr_' . $index;
            $product->description_en = $p_desc[$index];
            $product->description_ar =  'desc_ar_' . $index;
            $product->thumbnail = $p_img[$index];
            $product->image = $p_img[$index];
            $product->city = $cities[$index];

            $product->save();
        }
    }
}
