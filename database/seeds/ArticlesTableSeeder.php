<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

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
          'name' => 'bariloche',
          'title' => 'Bariloche',
          'text' => "<p>Located in the foothills of the Andes and overlooking Nahuel Huapei Lake, San Carlos de Bariloche is a quiet resort city modeled after alpine ski resorts. We arrived in late July, one of the coldest months in Argentina and one of the most popular times for skiing trips to Bariloche.</p>
 
<p>The entire highway, which snakes along the Nahuel Huapei Lake, is lined with resorts semi-hidden by the towering pine trees. We stayed at one of these resorts: it was a group of bungalows completely owned and operated by an elderly native couple. Our bungalow was tastefully decorated and warm, and it provided welcome comfort as we had just flown from the warm and humid Iguazu Falls. The best part of our bungalow, however, were the sweeping panoramic windows facing the lake. We would wake up as the sun slowly made its way out behind some trees in the lake’s far corner. As it brightened up the surroundings we were finally able to grasp the beauty of this place. The tall spiky mountains, donning a snowy cap, rose up and around the glistening water.</p>
 
<p>Later in the day, my brother convinced us that we should go out to see the lake instead of enjoying the view from the comfort of our living room couch. We reluctantly agreed and hopped on a short tour around the lake. Can confirm: it was worth it. We took a brief ski lift to the top of a mountain and, despite the freezing wind, we stood outside to take in the view (and yes, also to take plenty of photos). The Nahuel Huapei Lake surrounded us on three fronts and mountains and islands popped up in the middle of it. The name Nahuel Huapei Lagos (“lake” in Spanish) comes from the native Mapuche language with “Nahuel” meaning “jaguar” and “Huapei” meaning “island”. There is a centuries-old legend about a giant creature living underneath the waters.  The creature is known as Nahuelito and has been the subject of many stories, including Arthur Conan Doyle’s novel, The Lost World. While I don’t know about the existence of Nahuelito, I do know that I wouldn’t want to leave either if I were living in (or on) this lake.</p>
 
<p>Bariloche is also known for its chocolate. In fact it’s been dubbed the “Chocolate Capital of Argentina”. The colorfully decorated chocolate shops were ubiquitous in the city, and boutique chocolate shops were the only three shops in the airport. They seemed to have chocolate in any shade and shape. I would highly recommend buying one of the gift packs with an assortment of chocolate. There were chocolates pulled into strings, chocolates filled with liquid chocolate, chocolates fused with other kinds of snacks; basically any chocolate that you could imagine.</p>
 
<p>It is difficult to relive and describe what it was like to see the expansive lake and great mountains. They make you feel infinitesimal and strong at the same time. It is an exceptional piece of nature, so don’t miss it if you ever travel to South America. </p>

            ",
          'user_id' => 3,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 2,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'longmen_grottoes',
          'title' => 'Longmen Grottoes',
          'text' => "<p>As one of the Four Great Ancient Capitals of China, the city of Luoyang (洛阳) is definitely the least known to visitors outside China. Luoyang served as an important city and stronghold to 13 dynasties for over 3 millenniums and the birthplace of Buddhism in China.</p>
 
<p>Some 10 kilometers away from the Luoyang’s city center, carved into the valley of limestone cliffs formed by the the Yi River (伊河) and the Xiang (香山) and Longmen (龙门山) Mountains, stand some of the finest examples of Chinese Buddhist art. Over 100,000 statues of the Buddha and his disciples are carved into approximately 2,500 manmade caves. Some carvings are merely 2 centimeters (2 inches) tall, while others stand 18 meters (60 feet) in height. This is the grand and fascinating site of the Longmen Grottoes (龙门石窟).</p>
 
<p>The name “Dragon’s Gate Grottoes” derives from the natural resemblance of the Xiang and Longmen Mountains on both sides of the Yi River to a typical Chinese Gate tower (牌坊). These hills served as the southern “gate” to the city of Luoyang, which, during its height, was the 2nd most populous city in the world.</p>
 
<p>Listed as an UNESCO World Heritage Site in 2000 for “an outstanding manifestation of human artistic creativity,” the Longmen Grottoes illustrate the close relationship between imperial and religious elements of the Chinese community. The grottoes were carved from the 5th Century to the 12th century, although some items date as far back as the Qing Dynasty. The first carvings can be traced back to the reign of Emperor Xiaowen of the Northern Wei Period (北魏孝文帝) when he moved his capital from Datong to Luoyang. A third of the carvings occurred during the Northern Wei Period, while over half came from the Tang Dynasty (唐代), and the rest are from other periods.</p>
 
<p>The grottoes were not only a gallery of Chinese art, but also provided a wealth of information on most areas of Chinese culture. The Yaofang Cave (药房洞) contains over 150 inscriptions of treatments for illnesses ranging from the common cold to insanity. Many of these treatments are used on a regular basis in both Chinese and western medicine practices. There are numerous depictions of the life of the Buddha, including his disciples, bodhisattvas, guardians, apsaras and other creatures that reflect the change and development of Buddhism in China over hundred of years and numerous dynasties. The Longmen Grottoes reflect the Buddhist styles of early Indian and Yungang Grottoes (云冈石窟) art. However these sculptures are clad in roomier Han-style gowns and reflect a dignified refinement and elegant grace that was to influence much of China's later Buddhist sculpture. The earlier Northern Wei Period statues are mostly of Shakyamuni and Maitreya Bodhisattva. Later statues from the Tang Dynasty are more attached to the Maitreya Buddha of the Future and the Amitabha and Guayin, the compassionate Bodhisattva who reflected concern for personal salvation.</p>
 
<p>The various caves and rich carvings, religious and imperial motifs, and information about daily life make the Longmen Grottoes one of China's richest architectural treasures.</p>
 
<h3>Fengxian Temple</h3>
<p>Fengxian is the largest and the most representative statue of the Longmen Grottoes. Completed in 676 AD during the Tang Dynasty, the massive 18 meter (60 feet) tall statue of Vairocana Buddha dwarfs all of the other Longmen statues. It has 2 meter (6.5 feet) long ears, plump facial features, and a peaceful expression. This Temple was built for Empress Wu Zetian (武则天) and it is said that the face of the Vairocana Buddha is modeled after the Empress herself, which is why it is often heralded as a Chinese Mona Lisa, Venus or as the Mother of China. Each statue within this Shrine, although sustaining some damage, still retains wonderful detail, character, and animation. To the side of Vairocana Buddha are his two major disciples Kasyapa and Ananda, and two Bodhisattvas. Lokapalas (guardians or heavenly kings) and dvarapalas (temple guards) statues are shown on the side faces of the temple, guarding the site.</p>
 
<h3>Wanfo Cave</h3>
<p>Wanfo Cave (万佛洞) was formally dedicated in 680 AD and was created under the direction of the Palace Chapel nun Zhiyun (智运) and Yao Shenbiao (姚神表), a woman in the palace services. The literal translation of the name is Ten Thousand Buddha Cave, where actually over 15,000 small Buddha statues 2 centimeters tall are carved into the wall of the cave. Slightly larger carvings of Bodhisattvas on lotus flowers appear on the rear wall. The large interior of the cave was used for worshippers and ceremonies. Interestingly, the patrons of this cave were a mixture of the traditional elite and ordinary citizens with almost a quarter of these carvings coming from the direct patronage of nuns.</p>
 
<h3>Guyang Cave</h3>
<p>The Guyang Cave is one of the oldest caves at the Longmen Grottoes and perhaps the most important in demonstrating the skill of the Northern Wei style of carving. Dating back to the Northern Wei Period, the cave is filled with rich architectural design and a variety of fine calligraphy. Among the 600 inscriptions are some of the finest examples of Northern Wei style of writing. There are rows of perfectly carved niches with excellently-crafted Buddhist statues along the walls. It had been suggested that earliest carvings in this cave were made in 478 A.D., predating the movement of the capital by Emperor Xiaowen, thus suggesting the transfer of capitals was long in the planning.</p>
 
<p>Ticket Price: ¥100 (ticket sales end an hour before closing time)</p>
<p>Opening Hours: 8:00am - 5:00pm</p>

            ",
          'user_id' => 2,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 12,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'phobjikha_valley',
          'title' => 'Phobjikha Valley',
          'text' => "<p>In the land-locked Bhutan, known to be the last Shangri-La in the world, lies Phobjikha Valley. Phobjikha Valley, a 4-hour drive away from Punakha, is an expansive glacial valley. After several days of visiting countless untouched monasteries at Thimphu and Punakha, I didn’t know what to expect from an unassuming place in the middle of the Black Mountain region.</p>
 
<p>Though a detour for most Bhutan tours, Phobjikha Valley is worth the long journey off the main highway. Upon arrival at Phobjikha Valley my family and I had a full-course meal at a local homestay. We conversed with the Bhutanese hosts and ate on pillows on the straw floor. Visiting homestay accommodations truly made it an immersive experience. Our lunch was a typical Bhutanese meal complete with butter tea, red rice, chili with cheese, and dried beef. Unlike any other cuisines I had tried, Bhutanese food is unique; it draws influences from its neighboring countries - India, China, and Nepal. In Bhutan, the last Buddhist kingdom in the world, people heavily rely on dairy products (such as butter, milk, and cheese) because they don’t kill animals. Interestingly enough, Bhutan imports all its meat from India. Initially, it was strange to find butter in my tea and cheese in my vegetables. Nonetheless, as a self-proclaimed foodie, I enjoyed the gastronomic experience.</p>
 
<p>After our meal, we began the Gangtey Nature Trail, a relatively easy hike compared to the famous Paro Taktsang (also known as Tiger’s Nest Monastery) hike. Although nothing can truly beat the majesty of the Tiger’s Nest Monastery (since after all, it’s a monastery literally hanging off a cliff), the Gangtey Nature Trail is a completely different kind of beautiful. We started at a small hilltop overlooking Gangtey Goemba and then proceeded to head downhill through flower meadows. Going downhill was tricky since the rain made the trail quite muddy. In retrospect it’s not best to travel to Bhutan during the rainy season as it makes hiking and even driving on the highway dangerous. Despite the slippery slopes the flower meadows were tranquil. We even walked through a quaint village called the Semchubara village. It was picturesque; many Bhutanese farmers were harvesting rice in the fields. From there, we went through a dense forest, where the fresh air smelled like pine. It was the most serene part of the hike.</p>
 
<p>From the forest we walked into the open valley. The valley is made of marshy land and grassy pastures where farm animals graze. The Phobjikha Valley was akin to the green, vast meadows from the “The Hills Are Alive” scene in the “Sound of Music”. This valley is most known for the globally threatened black-necked cranes from Tibet that visit the valley during the winter season. Although I didn’t get the opportunity to see these cranes myself, the vast meadows were truly breathtaking.</p>
 
<p>Before travelling to Bhutan - a country my parents didn’t know existed, I had no idea what untouched beauty was in store.</p>

            ",
          'user_id' => 4,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 10,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'cesano',
          'title' => 'Cesano',
          'text' => "<p>When I arrived at Malpensa Airport back in June I felt as if I were in another world.   The signs in the terminal were in Italian and the casual chatter of people around me was unfamiliar to my ear.  Excited, I got my passport stamped for the first time. I went on to baggage claim and  waited while the woman next to me asked what language I spoke.  I had been in Italy for half an hour and already I could feel that this journey was going to be a cultural awakening unlike that which I had ever experienced.  It was even more than I had ever imagined.  Arriving in Italy like any tourist or sightseer would was only the tip of the iceberg.  I was lucky enough to be able to spend three weeks living and working with an Italian community in the town of Cesano Maderno.  This opportunity allowed me to immerse myself in Italian culture in a way beyond that which a regular tourist could have.  Cesano Maderno is a town of about 37,000 inhabitants in the northern Italian region of Lombardy.  Although it’s only twenty minutes by train from the heart of Milan, Cesano is a peaceful place, seemingly far removed from the hustle and bustle of one of the greatest cities in the world.  The city of Cesano, although technically united, is composed of multiple districts echoing historical divisions.  In fact my host sister Martina informed me before I had even stepped foot in the town that the sector I would be staying in is called Binzago and that its residents would appreciate it if I would call it that. </p>

<p>Binzago, and the rest of Cesano, is a place with strong ties to its history.  As soon as I had set down my bags Martina took me on a bike tour of the town.  We went through small streets paved with cobblestone and rode past old men sitting in the town square, reading the newspaper, and speaking in dialect.  Martina took me to the old city gate, which, now that the town has been expanded, serves as a monument rather than a marker to the entrance of the city.  Its face was decorated with frescoes and she informed me that Napoleon had once ridden through here.  We walked our bikes back across the piazza to the Palazzo Borromeo, a palace from the mid-1600s that was home to the noble Borromeo family but which now serves as a museum and boasts a beautiful public garden.  I would visit this garden many times during my stay in Binzago.  Sometimes just to take walks, or sit by the fountain, and once for a scavenger hunt.  As Martina and I rode home she would lazily stick out her arm and point at a tower here, a church there, and explain that it was old and important.  These monuments, in many cases, were older than the United States, but they seemed to be so prevalent that Martina, a seventeen-year-old girl who had lived next to them all her life, considered them to be ordinary.</p>
 
<p>The real reason I was in Binzago was not the monuments.  I was in Binzago as part of a volunteer program.  I, along with eighteen other American college students, would be working at the community’s oratorio for the next three weeks.  An oratorio is essentially a summer camp run by the Catholic Church, which is a very important part of the Italian community.  There were several oratori in Binzago alone, with kids ranging from the ages of five to thirteen in attendance.  After thirteen many of the kids who attended oratorio in early years became animatori, essentially counselors.  My primary job as an honorary animatore was to make friends with the kids and to encourage them to speak English.  At the same time they would be helping me improve my Italian.  Every weekday my host sisters (there were three: Martina, 17, Giorgia, 15, and Alessia, 11) and I would wake up before eight, put on our lime green animatore t-shirts (except Alessia, who was still young enough to attend oratorio), and bike across town to our oratorio, which specifically hosted kids of the ages 11 to 13.  From 9 AM to 6 PM I was outside helping coordinate activities and running around with the kids.  Although by lunchtime they had usually drained my energy, I learned more from those kids than I had thought I would.  By interacting with them and by watching how they interacted with each other I noticed differences between Italian and American interactions.  For one, some of the stereotypes are true: Italians talk with their hands.  Stefano, a boy of 11, would clasp his hands as if in prayer and shake them at you with gusto if he wasn’t getting what he wanted.  Giulia, also 11, would pinch her fingers and shake them deliberately at the boys when they would hog the ball.  Giulia, when I asked, was happy to explain all the hand motions to me, ranging from the polite to the vulgar.  What is important about the hand motions is that they convey very specific and nuanced meanings.  Like words, the hand motions are an essential part of communication. </p>

<p>In Italy I reveled in the organized chaos.  In fact the constant motion was comforting and once I got used to the fact that the rules were very loose, or even nonexistent, it was almost relaxing.  The oratorio undertook field trips that would have seemed impossible, at least to the suburban moms of America.  One Friday we took over one hundred kids on a 30 km bike ride (I did a lot of biking in Italy, if you couldn’t tell already) through town streets, on the highway, past a winding river, on a dusty road, and finally arriving at a park in Brianza.  As soon as we had deposited our bikes under a tree the kids began a scavenger hunt.  Following them I trekked through long grass and woods, fields of flowers, and over bridges.  I was exhausted but the kids were not.  The following week we took a field trip to the local pool.  The highlight of the pool was the water slides; the kids ran up and down the steps and raced to see who could careen their body fastest down the slide.  The boys especially loved to challenge the animatori, myself included, so I too found myself on the slide on more than one occasion.  A park, a water slide: you could also find these things in America, but there was something about the way the kids behaved so freely that made it different. </p>

<p>Of course it’s impossible to talk about Italy without talking about the food.  Meals are an event in Italy.  At the oratorio I helped set up lunch tables, complete with placemats and silverware.  The kids would sit at the tables with their friends and wait, somewhat impatiently, to be served.  They had a first course of pasta (choice of tomato or pesto sauce and complete with grated cheese, should it be desired), a second course of meat and a vegetable, and a small dessert.  The kids would sometimes complain that the food was gross but it was better than anything I had seen in an American school cafeteria.  On the first day the priest in charge apologized profusely for not having a second course; there was meat in the lasagna.  There was really no need for a second. And whenever I sat down to eat my host mom, dad, sister, grandparents, neighbors, whoever, would ask me if food was better in Italy than in America.  I knew that they only wanted to hear that yes, of course it was, and that even if I had said no they wouldn’t have taken that for an answer.  And in many cases the food was better.  I’m lucky enough to have grown up with a family that loves to cook.  Meals are important because the family gets together and we’ll sit, eat, and laugh for hours.  So in that sense Italian food culture wasn’t so different for me because my host family and I would eat all our meals together.  Lunch was an especially spectacular event.  Pasta followed by meat, followed by salad, followed by fruit.  The ingredients were fresh and prepared well.  It all tasted delicious but was really made special by the people who sat around the table.    </p>

<p>It is these same people that have left a lasting impression on me.  Italy, as beautiful as it is (they call it Bel Paese), is special to me because of the people there.  I’ll always remember sitting on the couch with Alessia, listening to Ed Sheeran’s new album and translating the lyrics for her.  Or playing soccer with little Stefano, who would yell “Grande… Big” after a good play and pinch my cheeks. Or shopping with Agnese, my host mom, at the local market on a Friday morning.  Or taking a day trip to Lake Como with Sandro, my host dad.  Among other things these people and our shared experiences are what I’ll remember most.  Travelling abroad is a wonderful opportunity.  Connecting with people around the world makes it even better.  I am so happy that I got to experience the sense of community and love in Binzago and that I get to extend that sense of community and love across the Atlantic.  When you have friends in different time zones the world is not as different or big as it may seem.  To my friends in Italy: ci vediamo presto. Il mondo è un posto migliore con tutti voi.  </p>
",
          'user_id' => 6,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 4,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'drobak',
          'title' => 'Drøbak',
          'text' => "<p>Early August winds sway the grain field as the air cools and the day winds down. On the right is a slow-setting sun that shines toward the brightly lit moon on my left. The clouds have drifted to the horizons as if to open the sky. My heart wants to stay in the field but my legs force me forward to finish my run and get back for dinner.</p>
 
<p>Norway is known for its mountains, fjords, and cottages, all of which I experienced during the week I spent at a friend’s summer house. It was a short drive from the town of Drøbak, a seaside establishment with seemingly more boats at port than streets on land. With just over 13 thousand inhabitants, Drøbak used to be the winter harbor of Norway’s capital, Oslo, when harsh winters froze the narrow sea inlet between the two cities.</p>
 
<p>In the town there is a variety of cafés and shops. A local favourite is Guri Malla, an ice cream shop with flavors ranging from the usual chocolate and vanilla to less commonly seen mojito and liquorice. During the summer there is a flea market at the town center, but the immense Christmas shop called Julehuset (the Christmas House) ensures that Christmas time is never lost, no matter what time of year it is.</p>
 
<p>Drøbak has all the features of a comfortable town feel, with a small cinema, or kino, and tasty handmade baked goods at Håndverksbakeriet. Yet being so close to Oslo, it is possible to take a simple day trip to the capital, which will introduce you to the deep history of Norway’s development and its more current cultural evolution. Or you can check off a visit to another country: Sweden’s border is an hour away, ready to invite you to into one of its largest candy stores.</p>
 
<p>Back at the summer house, it was just my two friends, a “furball”-dog, and me. The house was in a neighborhood area surrounded by kilometers of farmland. The majority of farms were grain with the occasional strawberry patch. One of the families had a berry kiosk which supplied our daily strawberries (which were some of the best at that). It was common knowledge that there were snakes in the grass, but that did not deter us from jumping around like children in a ball-pit.</p>
 
<p>I’ve been traveling since I was just months old. It is a way of life and I couldn’t imagine not experiencing it. However over the years I’ve also gotten used to new places being so different that I’ve starting longing for a home. Drøbak was a perfect mixture between old and new; comfortable yet exciting.</p>
 
<p>With summer vacation coming to a close and the habitual lifestyle of college around the corner again, the sunsets and lake views were a perfect “reset button” for the new year.</p>
",
          'user_id' => 5,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 4,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'morocco',
          'title' => 'Morocco',
          'text' => "
<p>“So you’ve been to Morocco?” I asked my Airbnb host, Max, while visiting in Vienna.</p>

<p>“Yeah, we stayed for 30 days, and went everywhere we could get our foot on. Lots of places had no tourists.  We went surfing and climbed mountains…” Max went on, showing me the photos of the snowy Atlas mountains, the Zagora desert, the oceans by Essaouira, and more. I was shocked by the country’s geographic diversity. </p>

<p>“How can there be so many different types of landscapes at the same season in one country?” I asked, already excited. </p>

<p>“You see, this is the magic of Morocco,” he replied.  “You can get a mix of climates and landscapes: from oceans to mountains and deserts.  I highly recommend you to check it out!”  </p>

<p>This conversation was in March. Two months later I stepped out onto the airport floor in Tangier: back again on the African continent, but this time on the very northwestern side.</p>

<p>Morocco, the gem of northwestern Africa and just a 45 min boat ride from Gibraltar, has been an intriguing country for many. When I ask my friends about Morocco the answers are often mixed with both desire to “check it out” and fear for their safety while traveling in Islamic countries. If Morocco is truly unsafe and unwelcoming, what is it about the country that has attracted so many figures, from Anthony Bourdain to Yves Saint Laurent, to visit, settle, and even fall in love with? I couldn’t wait to find out about this “magical power” attracting visitors from around the world every year. To do just that I went on a ten-day journey from the northern ocean side to the southern Sahara desert.</p>

<h2>SOME HIGHLIGHTS:</h2>
<p>Tangier - In planning this itinerary I wanted to include some non-touristy cities (aka: not Marrakesh and Casablanca) to obtain a perspective of authentic Morocco. I started my trip in Tangier and it did not disappoint. The city had a great balance of European influence and Moroccan culture. Bordering Spain by the Strait of Gibraltar, the city’s buildings were a mix of modern and ancient: its medina (old town) is 600 years old. Perhaps due to its strong European influence and its large expatriate population, Tangier gave me the impression that it’s an evolving city on its way to potentially becoming a port city of global importance in future years.</p>

<p>Cool spot: La Saveur de Poisson - recommended by Anthony Bourdain himself, the bistro opens at 7pm every night and has a fixed 5-course menu consisting of sea-to-table fish dishes for only $20. Other interesting fact: no alterations allowed (sorry, diet restriction eaters).</p>

<p>Chefchaouen - Deemed by media outlets as “the best well-kept secret” of Morocco, this Spanish-occupied town was not actually discovered until the 1900s.  Commonly known as “the blue pearl,” the city is, in fact, painted blue. Rumor has it that the blue paint was a way for residents to get rid of mosquitoes and to cool off from the summer heat. Even though it’s uncertain if those rumors are true it definitely felt slightly more breathable walking through the winding streets of Chefchaouen than it did in the sauna-like heat of southern Morocco. Getting lost in Chefchaouen’s medina is a dream-come-true to many photographers, and, as an amateur photographer, I was able to snap beautiful pictures in some of the most surprising and remarkable places.</p>

<p>Cool spot: Casa Perleta - in Morocco guest houses are called riads and Casa Perleta was an adorable little riad in the center of the Chefchaouen medina. The rooftop has a great view of the town and their breakfast spread is simply delightful.</p>

<p>Marrakesh - Other than Casablanca, Marrakesh is probably the most visited city in Morocco. The red city attracts artists, designers, and entrepreneurs alike from all over the world, who create a vibrant yet cohesive city that puts Morocco's creative side on display. I particularly enjoyed the more modern amenities offered in this tourist destination: I had my first taste of French-Moroccan cuisine, and also experienced my first credit card transaction here (the country is almost entirely cash only). Aside from the chic babouche and spice souks that one can easily find in any city’s medina, Marrakesh has its own flare to its shops: the goods range from the highest of quality to $10 handmade straw baskets that are a bargain for their quality and design. </p>

<p>Cool spot: Yves Saint Laurent Garden - the YSL Garden’s boutique is home to its designer’s original print babouches.  Also NOMAD, and so many more!</p>

<p>Zagora Desert – Before the trip I’d longed to see the Sahara desert as described in The Little Prince with my own eyes. In reality deserts are much further away from civilization than you’d think. I was clutch in time and only had one night inside the desert camp, but just driving took the majority of my time. Even so, experiencing some of the most extreme environments was important for me to gain a greater sense of appreciation of our world’s natural resources.</p>

<h3>Tips on traveling to Morocco:</h3>
<ul>
<li>Be aggressive when negotiating prices: beautifully crafted souvenirs, lamps, babouches, plates, etc. can be found virtually anywhere inside medinas, but in Moroccan culture shop owners usually give you twice or three times its actual price when you ask. I recommend asking for at most 50% of the price they tell you, then move up or down depending on your situation.</li>
<li>Safety? While Morocco is fairly safe for travelers, people tend to feel uneasy due to the overwhelming friendliness of locals. Yes, people (especially men) do follow tourists around in an attempt to reel them into hotels, restaurants, or guided tours in exchange for some tips, but the best way to deal with them is to firmly refuse and walk away. If you need directions it’s best to ask women and the elderly (as told by my desert tour guide).</li>
<li>Embrace stumbles: with its varying amenities across the country, you’ll likely find that things don’t always go according to plan. Even though I’d planned ahead for everything, I still experienced issues with train delays, tourist scams, and even food poisoning in the desert. However each stumble becomes a part of a great story and a whole new learning experience. If my train hadn’t been delayed I would never have had the opportunity to meet someone who grew up in a medina and who now works at Google Paris, and learn from his experience about how the medina has changed over the years.</li>
</ul>
<p>I’ve already made a promise to myself to come back. There are still countless places to explore and more people I’d love to meet. For those who are still hesitating, take no more time to think. This hidden gem will likely be populated very soon, and you don’t want to miss your chance for the experience of a lifetime. </p>
",
          'user_id' => 8,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 5,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'bali',
          'title' => 'Bali',
          'text' => "
<p>Hidden between the unique rock formations of Jimbaran Bay’s magnificent coastline, and perched 14 metres above the rough waves of the Indian Ocean, Rock Bar Bali is any sunset lover’s dream come true. People travel here from all over the world in hopes of viewing one of nature’s greatest sights.</p>
<p>AYANA resort is a world in itself that dives deeper into true Indonesian culture and luxury. Owned by a local family, not only do they make it a point to maintain local culture and authentic Indonesian cuisine, but they also embark on creating an unforgettable experience for all guests. While Bali is well-known for Kuta Beach and the Seminyak area in general (as those are the most popular tourist destinations), Jimbaran Bay, one of its most precious gems, often gets overlooked due to its distant location from these other areas.</p>
<p>Rock Bar Bali’s unique location and architecture make it one-of-a-kind: people stand in lines for hours to get in. To reach the bar you must take an inclinator, which allows for a breathtaking bird’s eye view of the 1.3-kilometre coastline of AYANA resort.  This architectural wonder was created by minimalist Japanese designer Yasuhiro Koichi. Koichi’s main goal was to emphasise the unique natural formations of the cliff-side rocks. By keeping the design simple, guests are encouraged to focus on the 360-degree view of the horizon and the glistening ocean waves. The actual glass bar was created by Japanese glass artist, Seiki Torige, using 100% recycled glass canes.  Additionally this bar is known to make some of the most unique cocktails with names like “Rock My World” and “Beer Bomb Sandy”.  </p>
<p>You can enjoy these drinks while watching the sun disappear behind the waves. Not only is the sunset magnificent, but when the sun goes down the stars brighten up the dark sky, revealing a completely different and amazing view.  As the sun submerges into the waters in front of your eyes and the waves crash all around you, internationally famous DJs mix their best beats, juxtaposing the untouched beauty of nature with a modern atmosphere.</p>
<p>If, like me, you come from a city like Singapore where sunsets are overshadowed by tall skyscrapers, you should make it a point to view a sunset like the ones I saw from the Rock Bar.  It was just the most beautiful experience. Watching the sunset I felt incredibly calm and was able to step back, realise the beauty of the world around us, and truly appreciate our planet.</p>
",
          'user_id' => 7,
          'image' => 'images/bariloche1.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 11,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
