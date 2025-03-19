public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->timestamps();
    });
}
