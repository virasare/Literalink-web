<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExploreBooksController extends Controller
{
    private function trendingBooks()
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'rating' => 5,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780735211292-L.jpg',
                'synopsis' => 'Panduan membangun kebiasaan kecil yang berdampak besar.',
                'description' => 'Atomic Habits menjelaskan bagaimana perubahan kecil yang konsisten dapat menghasilkan peningkatan luar biasa dalam kehidupan pribadi dan profesional.',
                'pages' => 320,
                'language' => 'English',
                'publisher' => 'Avery',
                'published_year' => 2018,
                'genre' => ['Self Improvement', 'Productivity'],
            ],
            [
                'id' => 2,
                'title' => 'The Psychology of Money',
                'author' => 'Morgan Housel',
                'rating' => 5,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780857197689-L.jpg',
                'synopsis' => 'Uang lebih dipengaruhi psikologi daripada logika.',
                'description' => 'Buku ini membahas bagaimana emosi, perilaku, dan pengalaman hidup memengaruhi keputusan finansial seseorang.',
                'pages' => 256,
                'language' => 'English',
                'publisher' => 'Harriman House',
                'published_year' => 2020,
                'genre' => ['Finance', 'Psychology'],
            ],
            [
                'id' => 3,
                'title' => 'Deep Work',
                'author' => 'Cal Newport',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781455586691-L.jpg',
                'synopsis' => 'Fokus mendalam adalah skill langka di era distraksi.',
                'description' => 'Deep Work membahas pentingnya kerja fokus tanpa gangguan untuk menghasilkan pekerjaan bernilai tinggi.',
                'pages' => 304,
                'language' => 'English',
                'publisher' => 'Grand Central Publishing',
                'published_year' => 2016,
                'genre' => ['Productivity', 'Career'],
            ],
            [
                'id' => 4,
                'title' => 'Ikigai',
                'author' => 'Héctor García & Francesc Miralles',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780143130727-L.jpg',
                'synopsis' => 'Rahasia hidup panjang dan bahagia dari Jepang.',
                'description' => 'Ikigai mengeksplorasi filosofi hidup masyarakat Okinawa yang berumur panjang dan bermakna.',
                'pages' => 208,
                'language' => 'English',
                'publisher' => 'Penguin Life',
                'published_year' => 2017,
                'genre' => ['Lifestyle', 'Philosophy'],
            ],
            [
                'id' => 5,
                'title' => 'Start With Why',
                'author' => 'Simon Sinek',
                'rating' => 5,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781591846444-L.jpg',
                'synopsis' => 'Pemimpin hebat selalu mulai dari “Why”.',
                'description' => 'Buku ini menjelaskan bagaimana pemimpin dan organisasi inspiratif memotivasi orang dengan tujuan yang jelas.',
                'pages' => 256,
                'language' => 'English',
                'publisher' => 'Portfolio',
                'published_year' => 2009,
                'genre' => ['Leadership', 'Business'],
            ],
            [
                'id' => 6,
                'title' => 'The 7 Habits of Highly Effective People',
                'author' => 'Stephen R. Covey',
                'rating' => 5,
                'is_free' => true,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81cpDaCJJCL.jpg',
                'synopsis' => 'Prinsip hidup efektif yang tak lekang waktu.',
                'description' => 'Buku klasik tentang kebiasaan pribadi dan profesional untuk mencapai efektivitas jangka panjang.',
                'pages' => 432,
                'language' => 'English',
                'publisher' => 'Free Press',
                'published_year' => 1989,
                'genre' => ['Self Improvement', 'Leadership'],
            ],
            [
                'id' => 7,
                'title' => 'Can’t Hurt Me',
                'author' => 'David Goggins',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81gTRv2HXrL.jpg',
                'synopsis' => 'Mental toughness tanpa kompromi.',
                'description' => 'Kisah hidup David Goggins tentang melampaui batas fisik dan mental melalui disiplin ekstrem.',
                'pages' => 364,
                'language' => 'English',
                'publisher' => 'Lioncrest',
                'published_year' => 2018,
                'genre' => ['Motivation', 'Biography'],
            ],
            [
                'id' => 8,
                'title' => 'Make Your Bed',
                'author' => 'William H. McRaven',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/71K9CbNZPsL.jpg',
                'synopsis' => 'Perubahan besar dimulai dari hal kecil.',
                'description' => 'Pelajaran hidup sederhana dari pengalaman seorang laksamana Angkatan Laut AS.',
                'pages' => 144,
                'language' => 'English',
                'publisher' => 'Grand Central Publishing',
                'published_year' => 2017,
                'genre' => ['Motivation', 'Self Improvement'],
            ],
            [
                'id' => 9,
                'title' => 'Grit',
                'author' => 'Angela Duckworth',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81WcnNQ-TBL.jpg',
                'synopsis' => 'Bakat kalah penting dibanding kegigihan.',
                'description' => 'Buku ini menjelaskan mengapa ketekunan dan passion lebih menentukan kesuksesan dibanding bakat.',
                'pages' => 352,
                'language' => 'English',
                'publisher' => 'Scribner',
                'published_year' => 2016,
                'genre' => ['Psychology', 'Self Improvement'],
            ],
            [
                'id' => 10,
                'title' => 'Essentialism',
                'author' => 'Greg McKeown',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/71Vxk9Zk7IL.jpg',
                'synopsis' => 'Fokus pada hal yang benar-benar penting.',
                'description' => 'Essentialism mengajarkan cara hidup dengan menghilangkan hal yang tidak penting.',
                'pages' => 272,
                'language' => 'English',
                'publisher' => 'Crown Business',
                'published_year' => 2014,
                'genre' => ['Productivity', 'Lifestyle'],
            ],
        ])->map(fn ($b) => array_merge($b, [
            'slug' => \Illuminate\Support\Str::slug($b['title']),
        ]))->toArray();
    }



    private function recommendedBooks()
    {
        return collect([
            [
                'id' => 11,
                'title' => 'Rich Dad Poor Dad',
                'author' => 'Robert T. Kiyosaki',
                'rating' => 5,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781612680194-L.jpg',
                'synopsis' => 'Pelajaran keuangan dari dua sudut pandang ayah.',
                'description' => 'Rich Dad Poor Dad membandingkan cara berpikir finansial antara ayah kaya dan ayah miskin, serta pentingnya literasi keuangan sejak dini.',
                'pages' => 336,
                'language' => 'English',
                'publisher' => 'Plata Publishing',
                'published_year' => 2017,
                'genre' => ['Finance', 'Business'],
            ],
            [
                'id' => 12,
                'title' => 'Think and Grow Rich',
                'author' => 'Napoleon Hill',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781585424337-L.jpg',
                'synopsis' => 'Pola pikir sebagai fondasi kesuksesan.',
                'description' => 'Buku klasik yang membahas prinsip kesuksesan berdasarkan penelitian terhadap tokoh-tokoh sukses dunia.',
                'pages' => 320,
                'language' => 'English',
                'publisher' => 'TarcherPerigee',
                'published_year' => 2004,
                'genre' => ['Motivation', 'Self Improvement'],
            ],
            [
                'id' => 13,
                'title' => 'Mindset',
                'author' => 'Carol S. Dweck',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780345472328-L.jpg',
                'synopsis' => 'Cara berpikir menentukan pertumbuhan.',
                'description' => 'Mindset memperkenalkan konsep growth mindset dan fixed mindset dalam pembelajaran, karier, dan kehidupan.',
                'pages' => 288,
                'language' => 'English',
                'publisher' => 'Ballantine Books',
                'published_year' => 2006,
                'genre' => ['Psychology', 'Education'],
            ],
            [
                'id' => 14,
                'title' => 'The Power of Habit',
                'author' => 'Charles Duhigg',
                'rating' => 5,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780812981605-L.jpg',
                'synopsis' => 'Mengapa kebiasaan terbentuk dan bagaimana mengubahnya.',
                'description' => 'Buku ini mengulas sains di balik kebiasaan dan bagaimana kebiasaan dapat diubah untuk meningkatkan kualitas hidup.',
                'pages' => 371,
                'language' => 'English',
                'publisher' => 'Random House',
                'published_year' => 2012,
                'genre' => ['Productivity', 'Psychology'],
            ],
            [
                'id' => 15,
                'title' => 'How to Win Friends & Influence People',
                'author' => 'Dale Carnegie',
                'rating' => 5,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780671027032-L.jpg',
                'synopsis' => 'Seni komunikasi dan hubungan manusia.',
                'description' => 'Panduan klasik untuk membangun hubungan, memengaruhi orang lain, dan meningkatkan keterampilan sosial.',
                'pages' => 288,
                'language' => 'English',
                'publisher' => 'Simon & Schuster',
                'published_year' => 1936,
                'genre' => ['Communication', 'Self Improvement'],
            ],
            [
                'id' => 16,
                'title' => 'The Almanack of Naval Ravikant',
                'author' => 'Eric Jorgenson',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781544514212-L.jpg',
                'synopsis' => 'Kebijaksanaan tentang kekayaan dan kebahagiaan.',
                'description' => 'Kumpulan pemikiran Naval Ravikant tentang membangun kekayaan, kebebasan, dan kehidupan bermakna.',
                'pages' => 242,
                'language' => 'English',
                'publisher' => 'Magrathea Publishing',
                'published_year' => 2020,
                'genre' => ['Philosophy', 'Business'],
            ],
            [
                'id' => 17,
                'title' => 'Zero to One',
                'author' => 'Peter Thiel',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780804139298-L.jpg',
                'synopsis' => 'Menciptakan sesuatu yang benar-benar baru.',
                'description' => 'Zero to One membahas inovasi, startup, dan cara membangun bisnis unik yang belum pernah ada.',
                'pages' => 224,
                'language' => 'English',
                'publisher' => 'Crown Business',
                'published_year' => 2014,
                'genre' => ['Startup', 'Business'],
            ],
            [
                'id' => 18,
                'title' => 'The Subtle Art of Not Giving a F*ck',
                'author' => 'Mark Manson',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780062457714-L.jpg',
                'synopsis' => 'Pendekatan jujur tentang kebahagiaan.',
                'description' => 'Buku ini mengajak pembaca untuk lebih selektif dalam peduli terhadap hal-hal yang benar-benar penting.',
                'pages' => 224,
                'language' => 'English',
                'publisher' => 'HarperOne',
                'published_year' => 2016,
                'genre' => ['Lifestyle', 'Self Improvement'],
            ],
            [
                'id' => 19,
                'title' => 'Show Your Work!',
                'author' => 'Austin Kleon',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780761178972-L.jpg',
                'synopsis' => 'Berbagi proses kreatif dengan dunia.',
                'description' => 'Panduan singkat bagi kreator untuk membagikan karya dan membangun audiens secara autentik.',
                'pages' => 224,
                'language' => 'English',
                'publisher' => 'Workman Publishing',
                'published_year' => 2014,
                'genre' => ['Creativity', 'Career'],
            ],
            [
                'id' => 20,
                'title' => 'Rework',
                'author' => 'Jason Fried & David Heinemeier Hansson',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780307463746-L.jpg',
                'synopsis' => 'Cara kerja baru yang lebih sederhana.',
                'description' => 'Rework menantang konsep kerja tradisional dan menawarkan pendekatan modern dalam membangun bisnis.',
                'pages' => 288,
                'language' => 'English',
                'publisher' => 'Crown Business',
                'published_year' => 2010,
                'genre' => ['Business', 'Productivity'],
            ],
        ])->map(fn ($b) => array_merge($b, [
            'slug' => \Illuminate\Support\Str::slug($b['title']),
        ]))->toArray();
    }



    private function newReleases()
    {
        return collect([
            [
                'id' => 21,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'rating' => 5,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780735211292-L.jpg',
                'synopsis' => 'Perubahan kecil yang menghasilkan dampak besar.',
                'description' => 'Atomic Habits membahas bagaimana kebiasaan kecil dapat membawa perubahan signifikan dalam hidup dan karier.',
                'pages' => 320,
                'language' => 'English',
                'publisher' => 'Avery',
                'published_year' => 2018,
                'genre' => ['Productivity', 'Self Improvement'],
            ],
            [
                'id' => 22,
                'title' => 'Deep Work',
                'author' => 'Cal Newport',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781455586691-L.jpg',
                'synopsis' => 'Fokus mendalam di era distraksi.',
                'description' => 'Deep Work menekankan pentingnya fokus tanpa gangguan untuk menghasilkan karya bernilai tinggi.',
                'pages' => 304,
                'language' => 'English',
                'publisher' => 'Grand Central Publishing',
                'published_year' => 2016,
                'genre' => ['Productivity', 'Career'],
            ],
            [
                'id' => 23,
                'title' => 'Ikigai',
                'author' => 'Héctor García & Francesc Miralles',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780143130727-L.jpg',
                'synopsis' => 'Rahasia hidup panjang dan bahagia.',
                'description' => 'Ikigai mengeksplorasi filosofi hidup Jepang tentang tujuan, makna, dan kebahagiaan.',
                'pages' => 208,
                'language' => 'English',
                'publisher' => 'Penguin Books',
                'published_year' => 2017,
                'genre' => ['Lifestyle', 'Philosophy'],
            ],
            [
                'id' => 24,
                'title' => 'The Psychology of Money',
                'author' => 'Morgan Housel',
                'rating' => 5,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780857197689-L.jpg',
                'synopsis' => 'Uang lebih tentang perilaku daripada angka.',
                'description' => 'Buku ini membahas bagaimana perilaku manusia memengaruhi keputusan keuangan lebih dari pengetahuan teknis.',
                'pages' => 256,
                'language' => 'English',
                'publisher' => 'Harriman House',
                'published_year' => 2020,
                'genre' => ['Finance', 'Behavior'],
            ],
            [
                'id' => 25,
                'title' => 'Start with Why',
                'author' => 'Simon Sinek',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781591846444-L.jpg',
                'synopsis' => 'Pemimpin hebat selalu tahu alasannya.',
                'description' => 'Start with Why mengulas pentingnya tujuan dalam kepemimpinan dan bisnis.',
                'pages' => 256,
                'language' => 'English',
                'publisher' => 'Portfolio',
                'published_year' => 2009,
                'genre' => ['Leadership', 'Business'],
            ],
            [
                'id' => 26,
                'title' => 'The Creative Act',
                'author' => 'Rick Rubin',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780593652886-L.jpg',
                'synopsis' => 'Proses kreatif sebagai cara hidup.',
                'description' => 'Buku reflektif tentang kreativitas, inspirasi, dan proses mencipta dari produser legendaris.',
                'pages' => 432,
                'language' => 'English',
                'publisher' => 'Penguin Press',
                'published_year' => 2023,
                'genre' => ['Creativity', 'Art'],
            ],
            [
                'id' => 27,
                'title' => 'Build',
                'author' => 'Tony Fadell',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780063046061-L.jpg',
                'synopsis' => 'Panduan membangun produk yang berarti.',
                'description' => 'Build berisi pelajaran praktis tentang desain produk, startup, dan kepemimpinan.',
                'pages' => 416,
                'language' => 'English',
                'publisher' => 'Harper Business',
                'published_year' => 2022,
                'genre' => ['Product', 'Startup'],
            ],
            [
                'id' => 28,
                'title' => 'Steal Like an Artist',
                'author' => 'Austin Kleon',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780761169253-L.jpg',
                'synopsis' => 'Kreativitas adalah mencuri dengan cara elegan.',
                'description' => 'Panduan singkat tentang kreativitas dan inspirasi bagi seniman modern.',
                'pages' => 160,
                'language' => 'English',
                'publisher' => 'Workman Publishing',
                'published_year' => 2012,
                'genre' => ['Creativity', 'Art'],
            ],
            [
                'id' => 29,
                'title' => 'Make Time',
                'author' => 'Jake Knapp & John Zeratsky',
                'rating' => 4,
                'is_free' => true,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9780525572428-L.jpg',
                'synopsis' => 'Fokus pada hal yang penting.',
                'description' => 'Make Time menawarkan strategi sederhana untuk mengelola perhatian dan waktu.',
                'pages' => 304,
                'language' => 'English',
                'publisher' => 'Currency',
                'published_year' => 2018,
                'genre' => ['Productivity', 'Lifestyle'],
            ],
            [
                'id' => 30,
                'title' => 'Company of One',
                'author' => 'Paul Jarvis',
                'rating' => 4,
                'is_free' => false,
                'cover' => 'https://covers.openlibrary.org/b/isbn/9781328972356-L.jpg',
                'synopsis' => 'Tetap kecil untuk tumbuh lebih baik.',
                'description' => 'Company of One membahas pendekatan bisnis berkelanjutan tanpa harus selalu berkembang besar.',
                'pages' => 272,
                'language' => 'English',
                'publisher' => 'Houghton Mifflin Harcourt',
                'published_year' => 2019,
                'genre' => ['Business', 'Mindset'],
            ],
        ])->map(fn ($b) => array_merge($b, [
            'slug' => \Illuminate\Support\Str::slug($b['title']),
        ]))->toArray();
    }



    private function sharedData()
    {
        return [
            'trendingBooks' => $this->trendingBooks(),
            'recommendedBooks' => $this->recommendedBooks(),
            'newReleases' => $this->newReleases(),
        ];
    }

    public function index()
    {
        return view('explorebooks', $this->sharedData());
    }

    public function public()
    {
        return view('pages.explorebooks-public', $this->sharedData());
    }

    public function detail($slug)
    {
        $book = $this->findBookBySlug($slug);
        $book['is_saved'] = false;

        return view('detail', compact('book'));
    }

    public function detailPublic($slug)
    {
        $book = $this->findBookBySlug($slug);
        $book['is_saved'] = false;

        return view('detail-public', compact('book'));
    }

    private function findBookBySlug($slug)
    {
        $books = collect($this->trendingBooks())
            ->merge($this->recommendedBooks())
            ->merge($this->newReleases());

        $book = $books->firstWhere('slug', $slug);

        if (!$book) {
            abort(404);
        }

        return $book;
    }

    public function savedBooks()
    {
        $savedBooks = $this->trendingBooks();

        return view('savedbooks', compact('savedBooks'));
    }


}
