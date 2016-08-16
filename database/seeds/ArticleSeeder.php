<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('articles')->delete();

        for ($i=0; $i < 200; $i++) {
            \App\Article::create([
                'title'   => '高并发Web服务的演变——节约系统内存和CPU '.$i,
                'body'    => '现在的Web系统面对的并发连接数在近几年呈现指数增长，高并发成为了一种常态，给Web系统带来不小的挑战。以最简单粗暴的方式解决，就是增加Web系统的机器和升级硬件配置。虽然现在的硬件越来越便宜，但是一味地通过增加机器来解决并发量的增长，成本是非常高昂的。结合技术优化方案，才是更有效的解决方法。并发连接数为什么呈指数增长？实际上，从这几年的用户基数上看，这个数量并没有出现指数增长，因此它并非主要原因。主要原因，还是web变得更复杂，交互更丰富所导致的。 '.$i,
                'user_id' => 1,
            ]);
        }
    }
}
