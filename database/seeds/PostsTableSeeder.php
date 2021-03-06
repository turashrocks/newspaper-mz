<?php

use App\Post;
use App\Category;
use App\Tag;
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
        $category1 = Category::create([
            'name' => 'প্রচ্ছদ',
        ]);
        $category2 = Category::create([
            'name' => 'জাতীয়',
        ]);
        $category3 = Category::create([
            'name' => 'আজকের পত্রিকা',
        ]);
        $category4 = Category::create([
            'name' => 'খেলা',
        ]);
        $category5 = Category::create([
            'name' => 'বিশ্বজমিন',
        ]);
        $category6 = Category::create([
            'name' => 'বিনোদন',
        ]);
        $category7 = Category::create([
            'name' => 'এক্সক্লুসিভ',
        ]);
        $category8 = Category::create([
            'name' => 'দেশ বিদেশের খবর',
        ]);
        $category9 = Category::create([
            'name' => 'লাইফস্টাইল',
        ]);
        $category10 = Category::create([
            'name' => 'আইটি বিশ্ব',
        ]);
        
        $post1=Post::create([
            'title' =>'লঙ্কান শিবিরে লঙ্কাকাণ্ড',
            'description' => 'ক্রিকেট বিশ্বকাপ-২০১৯',
            'content'=>'বিশ্বকাপে ৪৪ তম ম্যাচে মুখোমুখি ভারত-শ্রীলঙ্কা। ম্যানচেস্টারের ওল্ড ট্রাফোর্ডে টসে জিতে ব্যাটিংয়ের সিদ্ধান্ত নিয়েছে লঙ্কানরা। ব্যাটিংয়ে নেমে ভারতীয় পেসার জসপ্রিত বুমরাহর তোপের মুখে পড়ে তারা। পাওয়ার প্লের প্রথম ১০ ওভারেই হারিয়ে বসে ২ উইকেট। ২টি উইকেটই পান বুমরাহ। আউট হন দুই ওপেনার অধিনায়ক দিমুথ করুনারত্মে (১০) ও কুশল পেরেরা (১৮)। ১০ ওভারে লঙ্কানদের সংগ্রহ ৫২। এরপর ফের দ্রুত ২ উইকেটের খোঁজ পায় ভারতীয়রা।',
            'category_id' => $category4->id,
            'image'=>'posts/mz-post1.jpg'
        ]);
        $post2=Post::create([
            'title' =>'ক্যালিফোর্নিয়ায় শক্তিশালী ভূমিকম্প',
            'description' => 'বিশ্বজমিন',
            'content'=>'দুই দশকের মধ্যে সবচেয়ে শক্তিশালী ভূমিকম্প আঘাত হেনেছে যুক্তরাষ্ট্রের ক্যালিফোর্নিয়া রাজ্যের দক্ষিণাঞ্চলে। যুক্তরাষ্ট্রের আবহাওয়াবিদরা বলছেন, রিখটার স্কেলে ৭.১ মাত্রার চেয়েও প্রকট ছিল এর মাত্রা। এর উৎস ছিল রিজক্রেস্ট শহরের কাছে, যা লস অ্যানজেলেস থেকে প্রায় ২৪০ কিলোমিটার উত্তর-পূর্বে। এর আগে বৃহস্পতিবার একই এলাকায় আঘাত হানে ৬.৪ মাত্রার ভূমিকম্প। ভূকম্পনবিদন ড. লুসি জোনস বলেছেন, এই ভূমিকম্প অব্যাহত থাকতে পারে। এক সংবাদ সম্মেলনে তিনি বলেছেন, এটা হলো ধারাবাহিক ভূমিকম্প, যা আরো আঘাত হানতে পারে। প্রতিটি ভূমিকম্প আরেকটি কম্পনের পরিস্থিতি সৃষ্টি করে। আগামী সপ্তাহে একই রকম অথবা আরো বড় ভূমিকম্প আঘাত হানার আশঙ্কা রয়েছে শতকরা ১০ ভাগ।',
            'category_id' => $category5->id,
            'image'=>'posts/mz-post2.jpg'
        ]);
        $post3=Post::create([
            'title' =>'পাকা চুল কালো করবে একটি চা',
            'description' => 'লাইফস্টাইল ডেস্ক',
            'content'=>'বয়স হওয়ার আগেই যদি চুল পাকা শুরু করে তবে কিন্তু সত্যি অস্বস্তিকর। চুলের ফাঁক থেকে উঁকি মারছে পাকা চুল। কালো চুলগুলো অনেকভাবে বেঁধেও পাকা চুল ঢাকতে পারছেন না। চুলে নানা কায়দায় চিরুনি চালিয়েও কোনো কাজ হচ্ছে না।',
            'category_id' => $category9->id,
            'image'=>'posts/mz-post3.jpg'
        ]);
        $post4=Post::create([
            'title' =>'বিশ্বজুড়ে ফেসবুক ইনস্টাগ্রাম হোয়াটস অ্যাপে বিভ্রাট',
            'description' => 'আইটি বিশ্ব',
            'content'=>'বিশ্বজুড়ে সামাজিক যোগাযোগের মাধ্যম ফেসবুক, ইনস্টাগ্রাম ও হোয়াটস অ্যাপ ব্যবহারে সমস্যা হচ্ছে। বুধবার দুপুরের পর থেকে এই সমস্যা সৃষ্টি হয়েছে বলে জানিয়েছে ব্রিটিশ সংবাদ মাধ্যম ডেইলি মেইল।',
            'category_id' => $category10->id,
            'image'=>'posts/mz-post4.jpg'
        ]);
        $post5=Post::create([
            'title' =>'কউইঘুর মুসলিমদের সমস্যা সমাধান সম্ভব: এরদোগান',
            'description' => 'বিশ্বজমিন',
            'content'=>'তুরস্কের প্রেসিডেন্ট রিসেপ তাইয়েপ এরদোগান বলেছেন, চীনা শিবিরে থাকা হাজার হাজার উইঘুর মুসলিমকে সাহায্য করতে উভয়ের সঙ্গে আলোচনার মাধ্যমে সমাধান খুঁজে বের করা যেতে পারে। জিনজিয়াং প্রদেশে ১০ লাখ জাতিগত মুসলিম উইঘুরকে বন্দিশিবিরে আটক রাখায় চীনের সমালোচনা করছে একমাত্র মুসলিম সংখ্যাগরিষ্ঠ দেশ তুরস্ক। মঙ্গলবার বেইজিংয়ে চীনা প্রেসিডেন্ট শিং জিনপিংয়ের সঙ্গে বৈঠকের পর নরম সুরে কথা বলছেন প্রেসিডেন্ট এরদোগান।',
            'category_id' => $category8->id,
            'image'=>'posts/mz-post5.jpg'
        ]);
        $post6=Post::create([
            'title' =>'প্রধান সড়কে রিকশা না চালাতে আহ্বান মেয়র আতিকের',
            'description' => 'ডেস্ক',
            'content'=>'বয়স হওয়ার আগেই যদি চুল পাকা শুরু করে তবে কিন্তু সত্যি অস্বস্তিকর। চুলের ফাঁক থেকে উঁকি মারছে পাকা চুল। কালো চুলগুলো অনেকভাবে বেঁধেও পাকা চুল ঢাকতে পারছেন না। চুলে নানা কায়দায় চিরুনি চালিয়েও কোনো কাজ হচ্ছে না।',
            'category_id' => $category2->id,
            'image'=>'posts/mz-post6.jpg'
        ]);
        $post7=Post::create([
            'title' =>'গ্রেফতারের পর শাহবাগ থানায় ডিআইজি মিজান',
            'description' => 'জাতীয়',
            'content'=>'হাইকোর্টে জামিন নিতে আসা বরখাস্তকৃত ডিআইজি মিজানকে আদালতের গ্রেফতারের নির্দেশের পর তাকে শাহবাগ থানায় নিয়ে যাওয়া হয়। মিজানকে শাহবাগ থানার ওসির রুমে রাখা হয়েছে। সোমবার বিকাল ৫টা ৫৫ মিনিটের সময় পুলিশি পাহাড়ায় গ্রেফতার ডিআইজি (বরখাস্ত) মিজানকে শাহবাগ থানায় আনা হয়। এ সময় গণমাধ্যম কর্মীরা সেখানে জড়ো হন। তবে এ রিপোর্ট লেখা পর্যন্ত গণমাধ্যমকর্মীদের সঙ্গে শাহবাগ থানার ওসি আবুল হাসানের সঙ্গে কথা হয়নি। কয়েকবার চেষ্টা করেও ব্যর্থ হন। এখন পর্যন্ত আনুষ্ঠানিক বক্তব্য দেয়নি শাহবাগ থানা পুলিশ। এছাড়া কোন মামলায় তাকে গ্রেফতার দেখানো হয়েছে তা আনুষ্ঠানিকভাবে জানানো হয়নি। আইনানুযায়ী গ্রেফতার হওয়া আসামিকে ২৪ ঘণ্টার মধ্যে বিচারিক আদালতে তুলতে হয়। সে হিসেব অনুযায়ী আগামীকাল (মঙ্গলবার) তাকে বিচারিক আদালতে তোলা হতে পারে।',
            'category_id' => $category2->id,
            'image'=>'posts/mz-post7.jpg'
        ]);
        $post8=Post::create([
            'title' =>'ঈমান বাঁচাতে’ অভিনয় ছাড়ছেন বলিউড অভিনেত্রী!',
            'description' => 'আন্তর্জাতিক',
            'content'=>'পাঁচ বছরের জনপ্রিয়তাকে উপেক্ষা করে অভিনয় জগত ছাড়ার ঘোষণা দিয়েছেন দঙ্গল সিনেমায় আমির খানের সঙ্গে অভিনয় করা কাশ্মীরি কিশোরী জায়রা ওয়াসিম। রোববার ইনস্টাগ্রামে দেয়া এক পোস্টে অভিনয় থেকে নিজেকে সরিয়ে নেয়ার ঘোষণা দেন তিনি। খবর আনন্দবাজার পত্রিকার। অভিনয় ছাড়ার কারণ হিসেবে ভারতের জাতীয় পুরস্কারজয়ী তরুণ এ অভিনেত্রী জানান, সিনেমা কিংবা তারকা-জীবন ধর্মবিশ্বাস বা ‘ঈমান’ থেকে তাকে ক্রমশ দূরে ঠেলে দিচ্ছিল। জায়রার মতে, ফিল্মি ক্যারিয়ার তার বিশ্বাস এবং ধর্মের মাঝ খানে এসে দাঁড়িয়েছে। এ কারণে ধর্মের সঙ্গে সম্পর্ক বিপন্ন হয়ে পড়েছিল। ২০১৬ সালে আমির খানের সঙ্গে ‘দঙ্গল’ ছবিতে অভিনয় করেন জায়রা ওয়াসিম। এটাই ছিল তার ডেবিউ ফিল্ম। এত কম বয়সে তার অভিনয় দক্ষতা অত্যন্ত প্রশংসিত হয়। ফিল্মফেয়ার অ্যাওয়ার্ড, ন্যাশনাল ফিল্ম অ্যাওয়ার্ড-ন্যাশনাল চাইল্ড অ্যাওয়ার্ড ফর একসেপশনাল অ্যাচিভমেন্ট পেয়েছেন জায়রা।',
            'category_id' => $category6->id,
            'image'=>'posts/mz-post8.jpg'
        ]);
        $post9=Post::create([
            'title' =>'দুই বছরের জন্য নিষিদ্ধ হতে পারেন মেসি',
            'description' => 'খেলা',
            'content'=>'দুই বছরের জন্য নিষিদ্ধ হতে পারেন আর্জেন্টাইন তারকা লিওনেল মেসি! কোপা আমেরিকায় বিস্ফোরক মন্তব্য করায় এ শাস্তির মুখে আর্জেন্টিনার ৩২ বছর বয়সী এই তারকা ফরোয়ার্ড।কোপা আমেরিকায় আর্জেন্টিনাকে অসম্মান করা হয়েছে বলে অভিযোগ তুলেন মেসি। ব্রাজিলের বিপক্ষে সেমিফাইনালে হেরে আসর থেকে বিদায় নেয় আর্জেন্টিনা। ম্যাচে শেষে কনমেবলের দুর্নীতি নিয়ে অভিযোগ করেন। যা দক্ষিণ আমেরিকার ফুটবল নিয়ন্ত্রক সংস্থা কনমেবল ভালোভাবে নেয়নি। আর কনমেবলের নীতিমালা অনুযায়ী কেউ যদি সংস্থা কিংবা সংস্থার স্টাফ, কর্মকর্তাদের অপমান করে কিছু বলে তাহলে সর্বোচ্চ শাস্তি দুই বছরের নিষেধাজ্ঞা। সে অনুযায়ী দুই বছরের নিষেধাজ্ঞা পেতে পারেন পাঁচবারের ব্যালন ডি’অর জয়ী এই তারকা।',
            'category_id' => $category4->id,
            'image'=>'posts/mz-post9.jpg'
        ]);
        $post10=Post::create([
            'title' =>'ব্যবসায়ীদের ধান গুদামে, কৃষকের ধান ঘরে',
            'description' => 'অনলাইন',
            'content'=>'নড়াইলের কালিয়ায় অসাধু প্রভাবশালী ব্যবসায়ীরা খাদ্য গুদামে ধান দিচ্ছেন। আর কৃষকের ধান গোলায় থেকে যাচ্ছে। উপযুক্ত দাম না পাওয়ায় ক্ষতিগ্রস্থ কৃষকরা বাড়িতেই রেখে দিচ্ছেন তাদের উৎপাদিত ধান। আর অভাবগ্রস্থরা কমদামে বিক্রি করে আরোও ক্ষতিগ্রস্থ হচ্ছেন। কৃষকদের জন্য দেয়া সরকারের সুযোগ সুবিধা ভোগ করছেন অসাধু ব্যবসায়ীরা। প্রভাবশালী ব্যবসায়ীদের ধানে খাদ্য গুদামের সরকারী টার্গেট পূরণ হচ্ছে। সাধারণ অনেক কৃষক খাদ্য গুদামে ধান দিতে না পারায় অসন্তোষ প্রকাশ করেছেন। রহস্যজনক কারণে সংশ্লিষ্টদের এদিকে কোন খেয়ালই নেই।',
            'category_id' => $category2->id,
            'image'=>'posts/mz-post10.jpg'
        ]);
        $tag1 = Tag::create([
            'name' => 'জাতীয়',
        ]);
        $tag2 = Tag::create([
            'name' => 'অর্থনীতি',
        ]);
        $tag3 = Tag::create([
            'name' => 'আন্তর্জাতিক',
        ]);
        $tag4 = Tag::create([
            'name' => 'পরবাস',
        ]);
        $tag5 = Tag::create([
            'name' => 'খেলা',
        ]);
        $tag6 = Tag::create([
            'name' => 'ইসলাম ও জীবন',
        ]);
        $tag7 = Tag::create([
            'name' => 'সাহিত্য',
        ]);
        $tag8 = Tag::create([
            'name' => 'লাইফ স্টাইল',
        ]);
        $tag9 = Tag::create([
            'name' => 'এক্সক্লুসিভ',
        ]);
        $tag10 = Tag::create([
            'name' => 'ভূমিকম্প',
        ]);
        $tag11 = Tag::create([
            'name' => 'মতামত',
        ]);
        $tag12 = Tag::create([
            'name' => 'আইটি বিশ্ব',
        ]);
        $tag13 = Tag::create([
            'name' => 'বিনোদন',
        ]);

        $post1->tags()->attach([$tag5->id, $tag9->id]);
        $post2->tags()->attach([$tag3->id, $tag10->id]);
        $post3->tags()->attach([$tag8->id, $tag11->id]);
        $post4->tags()->attach([$tag3->id, $tag12->id]);
        $post5->tags()->attach([$tag3->id, $tag9->id]);
        $post6->tags()->attach([$tag1->id, $tag9->id]);
        $post7->tags()->attach([$tag1->id, $tag2->id]);
        $post8->tags()->attach([$tag13->id, $tag6->id, $tag3->id]);

    }
}
