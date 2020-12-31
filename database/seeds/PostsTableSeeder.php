<?php
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
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
        Post::truncate();
        Category::truncate();
        Tag::truncate();





        $category= new Category;
        $category->name = 'Category 1';
        $category->save();


        $category= new Category;
        $category->name = 'Category 2';
        $category->save();


        $post = new Post ;
         $post->title='My Firts Post';
         $post->excerpt= 'Extract my firts Post';
         $post->body='<p>Dragon ball z</p>';
         $post->category_id='2';
         $post->published_at = Carbon::now()->subDays(3);
         $post->save();

         $post = new Post ;

         $post->title='My Second Post';
         $post->excerpt= 'Extract my Second Post';
         $post->body='<p>Dragon ball gt</p>';
         $post->category_id='2';
         $post->published_at = Carbon::now();
         $post->save();

         $post = new Post ;
         $post->title='My Third Post';
         $post->excerpt= 'Extract my third Post';
         $post->body='<p>Naruto</p>';
         $post->category_id='1';
         $post->published_at = Carbon::now();
         $post->save();



         $tag = new Tag;
         $tag->name='Etiqueta 1';
         $tag->save();
         $tag = new Tag;
         $tag->name='Etiqueta 2';
         $tag->save();
    }
}
