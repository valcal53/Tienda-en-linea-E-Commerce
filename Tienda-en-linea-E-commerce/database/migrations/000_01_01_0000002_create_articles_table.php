public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->string('featured_image');
        $table->foreignId('category_blog_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
