public function up()
{
    Schema::create('stores', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('address');
        $table->boolean('active')->default(true);
        $table->timestamps();
    });
}
