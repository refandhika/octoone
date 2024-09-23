<?php

namespace Definite\Products\Updates;

use Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $description = '<p>Susu Kental manis Frisian Flag Gold mengandung kebaikan susu, yakni zat Gizi Makro (Karbohidrat, Protein dan Lemak) beserta Mikro (9 Vitamin dan 5 Mineral) yang dibutuhkan oleh tubuh.</p>
                        <p>Susu Kental manis Frisian Flag Gold merupakan satu-satunya Susu Kental Manis dengan 3gr Protein per gelas, yang setara dengan kandungan protein pada setengah butir telur.</p>
                        <p>&nbsp;</p>
                        <h4 class="subtitle">The Goodness of Gold</h4>
                        <ul class="fa-ul li-arrow">
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Vitamin A</strong> dan <strong>B1</strong> untuk mendukung fungsi visual.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Vitamin B2</strong> sebagai antioksidan dan mempertahankan kesehatan sel darah dan metabolisme tubuh.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Vitamin B6</strong> untuk membantu mempertahankan kesehatan rambut, kulit, hati dan mata.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Vitamin B12</strong> untuk mempertahankan fungsi dan perkembangan otak, saraf, sel darah, dan bagian tubuh lainnya.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Vitamin D3</strong> untuk membantu mempertahankan fungsi otak, dan juga imunitas tubuh.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Vitamin E</strong> untuk mempertahankan fungsi berbagai organ tubuh dan memperlambat kerusakan sel.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Kalsium</strong> memiliki peran penting dalam mempertahankan kekuatan dan kesehatan tulang, menjaga ritme detak jantung, fungsi otot, dan manfaat lainnya bagi tubuh.</li>
                            <li><i class="fa-li fa fa-angle-right"></i><strong>Fosfor</strong> memiliki peranan penting dalam mempertahankan fungsi ginjal, tulang, pembuluh darah dan juga sel-sel tubuh</li>
                        </ul>
                        <div class="wrp-sectiongray">
                            <h4 class="subtitle"></h4>
                            ';
    }

    private function products()
    {
        return [
            [
                'title' => 'Frisian Flag Gold',
                'category' => 'sweet-condensed-milk',
            ],
            [
                'title' => 'Bendera Kental Manis Cokelat',
                'category' => 'sweet-condensed-milk',
            ],
            [
                'title' => 'Bendera Kental Manis',
                'category' => 'sweet-condensed-milk',
            ],
            [
                'title' => 'Omela',
                'category' => 'sweet-condensed-milk',
            ],
            [
                'title' => 'Yes Mut Mut',
                'category' => 'sweet-condensed-milk',
            ],
        ];
    }
}
