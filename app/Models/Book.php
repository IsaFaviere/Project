class Book extends Model
{
    protected $fillable = ['name', 'isbn', 'value'];

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'book_store');
    }
}
