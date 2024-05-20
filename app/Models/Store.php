class Store extends Model
{
    protected $fillable = ['name', 'address', 'active'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_store');
    }
}
