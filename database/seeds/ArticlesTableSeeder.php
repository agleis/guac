<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
          'name' => 'a_visit_to_bariloche_argentina',
          'title' => 'A Visit To Bariloche, Argentina',
          'summary' => 'Located in the foothills of the Andes and
            overlooking Nahuel Huapei Lake,
            San Carlos de Bariloche is a quiet resort city',
          'text' => "<p>Located in the foothills of the Andes and overlooking Nahuel Huapei Lake,
            San Carlos de Bariloche is a quiet resort city, modeled after Alpine
            ski resorts. We arrived in late July, one of the coldest months in Argentina,
            and one of the most popular times for skiing trips to Bariloche.</p>

          <p>The entire highway, which snakes along the Nahuel Huapei Lake, is lined with
            resorts semi-hidden by the towering pine trees. We stayed at one of these
            resorts: it was a group of bungalows completely owned and operated by an
            elderly native couple. Our bungalow was tastefully decorated and warm, and
            it provided welcome comfort, as we had just flown from the warm and humid
            Iguazu Falls. The best part of our bungalow, however, were the sweeping
            panoramic windows facing the lake. We would wake up as the sun slowly made
            its way out behind some trees in the lake’s far corner. As it brightened up
            the surroundings, we were finally able to grasp the beauty of this place.
            The tall spiky mountains, donning a snowy cap, rose up and around
            the glistening water.</p>

          <p>Later in the day, my brother convinced us that we should go out to see
            the lake instead of enjoying the view from the comfort of our living room
            couch. We reluctantly agreed and hopped on a short tour around the lake.
            Can confirm: it was worth it. We took a brief ski lift to the top of a
            mountain, and despite the freezing wind, we stood outside to take in the
            view, and yes, also to take plenty of photos. The Nahuel Huapei Lake
            surrounded us on three fronts and mountains and islands popped up in
            the middle of it. The name Nahuel Huapei Lagos (“lake” in Spanish) came
            from the native Mapuche language, with “Nahuel” meaning “jaguar” and
            “Huapei” meaning “island”. There is a centuries-old legend about a giant
            creature living underneath the waters.  The creature is known as Nahuelito
            and has been the subject of many stories, including Arthur Conan Doyle’s
            novel, The Lost World. While I don’t know about the existence of Nahuelito,
            I do know that I wouldn’t want to leave either if I were living in
            (or on) this lake.</p>

          <p>Bariloche is also known for its chocolate. In fact, it’s been dubbed
            the “Chocolate Capital of Argentina”. The colorfully decorated
            chocolate shops were ubiquitous in the city, and boutique chocolate
            shops were the only three shops in the airport. They seemed to have
            chocolate in any shade and shape. I would highly recommend buying one
            of the gift packs with an assortment of chocolate. There were chocolates
            pulled into strings, chocolates filled with liquid chocolate, chocolates
            fused with other kinds of snacks: basically any chocolate that you could
            imagine.</p>

          <p>It is difficult to relive and describe what it was like to see the
            expansive lake and great mountains. They make you feel infinitesimal
            and strong at the same time. It is an exceptional piece of nature so
            don’t miss it if you ever travel to South America.</p>
            ",
          'user_id' => 1,
          'image' => 'bariloche1.jpg',
          'featured' => true
        ]);
    }
}
