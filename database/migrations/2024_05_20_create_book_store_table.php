public function up()
{
    Schema::create('book_store', function (Blueprint $table) {
        $table->id();
        $table->foreignId('book_id')->constrained()->onDelete('cascade');
        $table->foreignId('store_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
