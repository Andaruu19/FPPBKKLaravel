<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{

    public function run(): void
    {
        $movies = [

            [
                "title" => "The Super Mario Bros. Movie",
                "slug" => "not-all-heroes-wear-capesi-some-wear-overallsi",
                "year" => "2023",
                "description" => "While working underground to fix a water main, Brooklyn plumbers—and brothers—Mario and Luigi are transported down a mysterious pipe and wander into a magical new world. But when the brothers are separated, Mario embarks on an epic quest to find Luigi.",
                "imagepath" => "images/movie_images/502356.jpg",
            ],


            [
                "title" => "Barbie",
                "slug" => "she-s-everythingi-he-s-just-keni",
                "year" => "2023",
                "description" => "Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.",
                "imagepath" => "images/movie_images/346698.jpg",
            ],


            [
                "title" => "Guardians of the Galaxy Vol. 3",
                "slug" => "once-more-with-feelingi",
                "year" => "2023",
                "description" => "Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.",
                "imagepath" => "images/movie_images/447365.jpg",
            ],


            [
                "title" => "John Wick: Chapter 4",
                "slug" => "no-way-backi-one-way-outi",
                "year" => "2023",
                "description" => "With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.",
                "imagepath" => "images/movie_images/603692.jpg",
            ],


            [
                "title" => "Spider-Man: Across the Spider-Verse",
                "slug" => "it-s-how-you-wear-the-mask-that-mattersi",
                "year" => "2023",
                "description" => "After reuniting with Gwen Stacy, Brooklyn’s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters the Spider Society, a team of Spider-People charged with protecting the Multiverse’s very existence. But when the heroes clash on how to handle a new threat, Miles finds himself pitted against the other Spiders and must set out on his own to save those he loves most.",
                "imagepath" => "images/movie_images/569094.jpg",
            ],


            [
                "title" => "Ant-Man and the Wasp: Quantumania",
                "slug" => "witness-the-beginning-of-a-new-dynastyi",
                "year" => "2023",
                "description" => "Super-Hero partners Scott Lang and Hope van Dyne, along with with Hope's parents Janet van Dyne and Hank Pym, and Scott's daughter Cassie Lang, find themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that will push them beyond the limits of what they thought possible.",
                "imagepath" => "images/movie_images/640146.jpg",
            ],


            [
                "title" => "Fast X",
                "slug" => "the-end-of-the-road-beginsi",
                "year" => "2023",
                "description" => "Over many missions and against impossible odds, Dom Toretto and his family have outsmarted, out-nerved and outdriven every foe in their path. Now, they confront the most lethal opponent they've ever faced: A terrifying threat emerging from the shadows of the past who's fueled by blood revenge, and who is determined to shatter this family and destroy everything—and everyone—that Dom loves, forever.",
                "imagepath" => "images/movie_images/385687.jpg",
            ],


            [
                "title" => "Oppenheimer",
                "slug" => "the-world-forever-changesi",
                "year" => "2023",
                "description" => "The story of J. Robert Oppenheimer’s role in the development of the atomic bomb during World War II.",
                "imagepath" => "images/movie_images/872585.jpg",
            ],


            [
                "title" => "Transformers: Rise of the Beasts",
                "slug" => "unite-or-falli",
                "year" => "2023",
                "description" => "When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.",
                "imagepath" => "images/movie_images/667538.jpg",
            ],


            [
                "title" => "The Flash",
                "slug" => "worlds-collidei",
                "year" => "2023",
                "description" => "When his attempt to save his family inadvertently alters the future, Barry Allen becomes trapped in a reality in which General Zod has returned and there are no Super Heroes to turn to. In order to save the world that he is in and return to the future that he knows, Barry's only hope is to race for his life. But will making the ultimate sacrifice be enough to reset the universe?",
                "imagepath" => "images/movie_images/298618.jpg",
            ],


            [
                "title" => "Elemental",
                "slug" => "opposites-reacti",
                "year" => "2023",
                "description" => "In a city where fire, water, land and air residents live together, a fiery young woman and a go-with-the-flow guy will discover something elemental: how much they have in common.",
                "imagepath" => "images/movie_images/976573.jpg",
            ],


            [
                "title" => "Dungeons & Dragons: Honor Among Thieves",
                "slug" => "no-experience-necessaryi",
                "year" => "2023",
                "description" => "A charming thief and a band of unlikely adventurers undertake an epic heist to retrieve a lost relic, but things go dangerously awry when they run afoul of the wrong people.",
                "imagepath" => "images/movie_images/493529.jpg",
            ],


            [
                "title" => "Evil Dead Rise",
                "slug" => "mommy-loves-you-to-deathi",
                "year" => "2023",
                "description" => "A reunion between two estranged sisters gets cut short by the rise of flesh-possessing demons, thrusting them into a primal battle for survival as they face the most nightmarish version of family imaginable.",
                "imagepath" => "images/movie_images/713704.jpg",
            ],


            [
                "title" => "The Little Mermaid",
                "slug" => "watch-and-you-ll-seei-some-day-i-ll-bei-part-of-your-world%21",
                "year" => "2023",
                "description" => "The youngest of King Triton’s daughters, and the most defiant, Ariel longs to find out more about the world beyond the sea, and while visiting the surface, falls for the dashing Prince Eric. With mermaids forbidden to interact with humans, Ariel makes a deal with the evil sea witch, Ursula, which gives her a chance to experience life on land, but ultimately places her life – and her father’s crown – in jeopardy.",
                "imagepath" => "images/movie_images/447277.jpg",
            ],


            [
                "title" => "Meg 2: The Trench",
                "slug" => "back-for-secondsi",
                "year" => "2023",
                "description" => "An exploratory dive into the deepest depths of the ocean of a daring research team spirals into chaos when a malevolent mining operation threatens their mission and forces them into a high-stakes battle for survival.",
                "imagepath" => "images/movie_images/615656.jpg",
            ],


            [
                "title" => "Creed III",
                "slug" => "you-can-t-run-from-your-pasti",
                "year" => "2023",
                "description" => "After dominating the boxing world, Adonis Creed has thrived in his career and family life. When a childhood friend and former boxing prodigy, Damian Anderson, resurfaces after serving a long sentence in prison, he is eager to prove that he deserves his shot in the ring. The face-off between former friends is more than just a fight. To settle the score, Adonis must put his future on the line to battle Damian — a fighter with nothing to lose.",
                "imagepath" => "images/movie_images/677179.jpg",
            ],


            [
                "title" => "The Pope's Exorcist",
                "slug" => "inspired-by-the-actual-files-of-father-gabriele-amorthi-chief-exorcist-of-the-vaticani",
                "year" => "2023",
                "description" => "Father Gabriele Amorth, Chief Exorcist of the Vatican, investigates a young boy's terrifying possession and ends up uncovering a centuries-old conspiracy the Vatican has desperately tried to keep hidden.",
                "imagepath" => "images/movie_images/758323.jpg",
            ],


            [
                "title" => "Scream VI",
                "slug" => "new-yorki-new-rulesi",
                "year" => "2023",
                "description" => "Following the latest Ghostface killings, the four survivors leave Woodsboro behind and start a fresh chapter.",
                "imagepath" => "images/movie_images/934433.jpg",
            ],


            [
                "title" => "Knock at the Cabin",
                "slug" => "save-your-family-or-save-humanityi-make-the-choicei",
                "year" => "2023",
                "description" => "While vacationing at a remote cabin, a young girl and her two fathers are taken hostage by four armed strangers who demand that the family make an unthinkable choice to avert the apocalypse. With limited access to the outside world, the family must decide what they believe before all is lost.",
                "imagepath" => "images/movie_images/631842.jpg",
            ],


            [
                "title" => "Extraction 2",
                "slug" => "prepare-for-the-ride-of-your-lifei",
                "year" => "2023",
                "description" => "Tasked with extracting a family who is at the mercy of a Georgian gangster, Tyler Rake infiltrates one of the world's deadliest prisons in order to save them. But when the extraction gets hot, and the gangster dies in the heat of battle, his equally ruthless brother tracks down Rake and his team to Vienna, in order to get revenge.",
                "imagepath" => "images/movie_images/697843.jpg",
            ],


            [
                "title" => "Plane",
                "slug" => "survive-together-or-die-alonei",
                "year" => "2023",
                "description" => "After a heroic job of successfully landing his storm-damaged aircraft in a war zone, a fearless pilot finds himself between the agendas of multiple militias planning to take the plane and its passengers hostage.",
                "imagepath" => "images/movie_images/646389.jpg",
            ],


            [
                "title" => "Indiana Jones and the Dial of Destiny",
                "slug" => "a-legend-will-face-his-destinyi",
                "year" => "2023",
                "description" => "Finding himself in a new era, and approaching retirement, Indy wrestles with fitting into a world that seems to have outgrown him. But as the tentacles of an all-too-familiar evil return in the form of an old rival, Indy must don his hat and pick up his whip once more to make sure an ancient and powerful artifact doesn't fall into the wrong hands.",
                "imagepath" => "images/movie_images/335977.jpg",
            ],


            [
                "title" => "65",
                "slug" => "65-million-years-agoi-prehistoric-earth-had-a-visitori",
                "year" => "2023",
                "description" => "65 million years ago, the only 2 survivors of a spaceship from Somaris that crash-landed on Earth, must fend off dinosaurs to reach the escape vessel in time before an imminent asteroid strike threatens to destroy the planet.",
                "imagepath" => "images/movie_images/700391.jpg",
            ],


            [
                "title" => "Guy Ritchie's The Covenant",
                "slug" => "a-bondi-a-pledgei-a-commitmenti",
                "year" => "2023",
                "description" => "During the war in Afghanistan, a local interpreter risks his own life to carry an injured sergeant across miles of grueling terrain.",
                "imagepath" => "images/movie_images/882569.jpg",
            ],


            [
                "title" => "Cocaine Bear",
                "slug" => "get-in-linei",
                "year" => "2023",
                "description" => "Inspired by a true story, an oddball group of cops, criminals, tourists and teens converge in a Georgia forest where a 500-pound black bear goes on a murderous rampage after unintentionally ingesting cocaine.",
                "imagepath" => "images/movie_images/804150.jpg",
            ],


            [
                "title" => "No Hard Feelings",
                "slug" => "prettyi-awkwardi",
                "year" => "2023",
                "description" => "On the brink of losing her childhood home, Maddie discovers an intriguing job listing: wealthy helicopter parents looking for someone to “date” their introverted 19-year-old son, Percy, before he leaves for college. To her surprise, Maddie soon discovers the awkward Percy is no sure thing.",
                "imagepath" => "images/movie_images/884605.jpg",
            ],


            [
                "title" => "Air",
                "slug" => "some-icons-are-meant-to-flyi",
                "year" => "2023",
                "description" => "Discover the game-changing partnership between a then undiscovered Michael Jordan and Nike's fledgling basketball division which revolutionized the world of sports and culture with the Air Jordan brand.",
                "imagepath" => "images/movie_images/964980.jpg",
            ],


            [
                "title" => "Murder Mystery 2",
                "slug" => "this-mystery-is-deux-or-diei",
                "year" => "2023",
                "description" => "After starting their own detective agency, Nick and Audrey Spitz land a career-making case when their billionaire pal is kidnapped from his wedding.",
                "imagepath" => "images/movie_images/638974.jpg",
            ],


            [
                "title" => "Ghosted",
                "slug" => "finding-that-special-someone-can-be-a-real-adventurei",
                "year" => "2023",
                "description" => "Salt-of-the-earth Cole falls head over heels for enigmatic Sadie — but then makes the shocking discovery that she’s a secret agent. Before they can decide on a second date, Cole and Sadie are swept away on an international adventure to save the world.",
                "imagepath" => "images/movie_images/868759.jpg",
            ],


            [
                "title" => "Mission: Impossible - Dead Reckoning Part One",
                "slug" => "we-all-share-the-same-fatei",
                "year" => "2023",
                "description" => "Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands. With control of the future and the world's fate at stake and dark forces from Ethan's past closing in, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan must consider that nothing can matter more than his mission—not even the lives of those he cares about most.",
                "imagepath" => "images/movie_images/575264.jpg",
            ],


            [
                "title" => "Heart of Stone",
                "slug" => "defy-the-odds",
                "year" => "2023",
                "description" => "An intelligence operative for a shadowy global peacekeeping agency races to stop a hacker from stealing its most valuable — and dangerous — weapon.",
                "imagepath" => "images/movie_images/724209.jpg",
            ],


            [
                "title" => "Insidious: The Red Door",
                "slug" => "it-ends-where-it-all-begani",
                "year" => "2023",
                "description" => "To put their demons to rest once and for all, Josh Lambert and a college-aged Dalton Lambert must go deeper into The Further than ever before, facing their family's dark past and a host of new and more horrifying terrors that lurk behind the red door.",
                "imagepath" => "images/movie_images/614479.jpg",
            ],


            [
                "title" => "Operation Fortune: Ruse de Guerre",
                "slug" => "in-this-operationi-everyone-has-a-part-to-playi",
                "year" => "2023",
                "description" => "Special agent Orson Fortune and his team of operatives recruit one of Hollywood's biggest movie stars to help them on an undercover mission when the sale of a deadly new weapons technology threatens to disrupt the world order.",
                "imagepath" => "images/movie_images/739405.jpg",
            ],


            [
                "title" => "Blue Beetle",
                "slug" => "jaime-reyes-is-a-superhero-whether-he-likes-it-or-noti",
                "year" => "2023",
                "description" => "Recent college grad Jaime Reyes returns home full of aspirations for his future, only to find that home is not quite as he left it. As he searches to find his purpose in the world, fate intervenes when Jaime unexpectedly finds himself in possession of an ancient relic of alien biotechnology: the Scarab.",
                "imagepath" => "images/movie_images/565770.jpg",
            ],


            [
                "title" => "Renfield",
                "slug" => "sucks-to-be-himi",
                "year" => "2023",
                "description" => "Having grown sick and tired of his centuries as Dracula's lackey, Renfield finds a new lease on life — and maybe even redemption — when he falls for feisty, perennially angry traffic cop Rebecca Quincy.",
                "imagepath" => "images/movie_images/649609.jpg",
            ],


            [
                "title" => "The Mother",
                "slug" => "vengeance-is-a-mother%21",
                "year" => "2023",
                "description" => "A deadly female assassin comes out of hiding to protect the daughter that she gave up years before, while on the run from dangerous men.",
                "imagepath" => "images/movie_images/552688.jpg",
            ],


            [
                "title" => "Talk to Me",
                "slug" => "you-calli-they-ll-answeri",
                "year" => "2023",
                "description" => "When a group of friends discover how to conjure spirits using an embalmed hand, they become hooked on the new thrill, until one of them goes too far and unleashes terrifying supernatural forces.",
                "imagepath" => "images/movie_images/1008042.jpg",
            ],


            [
                "title" => "Tetris",
                "slug" => "the-game-you-couldn-t-put-downi-the-story-you-couldn-t-make-upi",
                "year" => "2023",
                "description" => "In 1988, American video game salesman Henk Rogers discovers the video game Tetris. When he sets out to bring the game to the world, he enters a dangerous web of lies and corruption behind the Iron Curtain.",
                "imagepath" => "images/movie_images/726759.jpg",
            ],


            [
                "title" => "Knights of the Zodiac",
                "slug" => "go-beyond-your-destinyi",
                "year" => "2023",
                "description" => "When a headstrong street orphan, Seiya, in search of his abducted sister unwittingly taps into hidden powers, he discovers he might be the only person alive who can protect a reincarnated goddess, sent to watch over humanity. Can he let his past go and embrace his destiny to become a Knight of the Zodiac?",
                "imagepath" => "images/movie_images/455476.jpg",
            ],


            [
                "title" => "Red, White & Royal Blue",
                "slug" => "love-who-you-wanti-it-s-good-foreign-policyi",
                "year" => "2023",
                "description" => "After an altercation between Alex, the president's son, and Britain's Prince Henry at a royal event becomes tabloid fodder, their long-running feud now threatens to drive a wedge in U.S./British relations. When the rivals are forced into a staged truce, their icy relationship begins to thaw and the friction between them sparks something deeper than they ever expected.",
                "imagepath" => "images/movie_images/930094.jpg",
            ],


            [
                "title" => "Hidden Strike",
                "slug" => "there-is-a-plani-they-just-don-t-know-what-it-isi",
                "year" => "2023",
                "description" => "Two elite soldiers must escort civilians through a gauntlet of gunfire and explosions.",
                "imagepath" => "images/movie_images/457332.jpg",
            ],


            [
                "title" => "The Last Voyage of the Demeter",
                "slug" => "the-legend-of-dracula-is-borni",
                "year" => "2023",
                "description" => "The crew of the merchant ship Demeter attempts to survive the ocean voyage from Carpathia to London as they are stalked each night by a merciless presence onboard the ship.",
                "imagepath" => "images/movie_images/635910.jpg",
            ],


            [
                "title" => "Missing",
                "slug" => "no-one-disappears-without-a-tracei",
                "year" => "2023",
                "description" => "When her mother disappears while on vacation in Colombia with her new boyfriend, June’s search for answers is hindered by international red tape. Stuck thousands of miles away in Los Angeles, June creatively uses all the latest technology at her fingertips to try and find her before it’s too late. But as she digs deeper, her digital sleuthing raises more questions than answers... and when June unravels secrets about her mom, she discovers that she never really knew her at all.",
                "imagepath" => "images/movie_images/768362.jpg",
            ],


            [
                "title" => "Gran Turismo",
                "slug" => "from-gamer-to-raceri",
                "year" => "2023",
                "description" => "The ultimate wish-fulfillment tale of a teenage Gran Turismo player whose gaming skills won him a series of Nissan competitions to become an actual professional racecar driver.",
                "imagepath" => "images/movie_images/980489.jpg",
            ],


            [
                "title" => "Teen Wolf: The Movie",
                "slug" => "the-pack-is-backi",
                "year" => "2023",
                "description" => "The wolves are howling once again, as a terrifying ancient evil emerges in Beacon Hills. Scott McCall, no longer a teenager yet still an Alpha, must gather new allies and reunite trusted friends to fight back against this powerful and deadly enemy.",
                "imagepath" => "images/movie_images/877703.jpg",
            ],


            [
                "title" => "Ruby Gillman, Teenage Kraken",
                "slug" => "discover-the-hero-just-beneath-the-surfacei",
                "year" => "2023",
                "description" => "Ruby Gillman, a sweet and awkward high school student, discovers she's a direct descendant of the warrior kraken queens. The kraken are sworn to protect the oceans of the world against the vain, power-hungry mermaids. Destined to inherit the throne from her commanding grandmother, Ruby must use her newfound powers to protect those she loves most.",
                "imagepath" => "images/movie_images/1040148.jpg",
            ],


            [
                "title" => "Teenage Mutant Ninja Turtles: Mutant Mayhem",
                "slug" => "heroes-aren-t-borni-they-re-mutatedi",
                "year" => "2023",
                "description" => "After years of being sheltered from the human world, the Turtle brothers set out to win the hearts of New Yorkers and be accepted as normal teenagers through heroic acts. Their new friend April O'Neil helps them take on a mysterious crime syndicate, but they soon get in over their heads when an army of mutants is unleashed upon them.",
                "imagepath" => "images/movie_images/614930.jpg",
            ],


            [
                "title" => "Hypnotic",
                "slug" => "control-is-an-illusioni",
                "year" => "2023",
                "description" => "A detective becomes entangled in a mystery involving his missing daughter and a secret government program while investigating a string of reality-bending crimes.",
                "imagepath" => "images/movie_images/536437.jpg",
            ],


            [
                "title" => "Your Place or Mine",
                "slug" => "two-livesi-two-citiesi-one-last-chancei",
                "year" => "2023",
                "description" => "When best friends and total opposites Debbie and Peter swap homes for a week, they get a peek into each other's lives that could open the door to love.",
                "imagepath" => "images/movie_images/703451.jpg",
            ],


            [
                "title" => "Kandahar",
                "slug" => "the-only-thing-more-dangerous-than-the-mission-is-the-escapei",
                "year" => "2023",
                "description" => "After his mission is exposed, an undercover CIA operative stuck deep in hostile territory in Afghanistan must fight his way out, alongside his Afghan translator, to an extraction point in Kandahar, all whilst avoiding elite enemy forces and foreign spies tasked with hunting them down.",
                "imagepath" => "images/movie_images/717930.jpg",
            ],


            [
                "title" => "You People",
                "slug" => "opposites-attracti-families-don-ti",
                "year" => "2023",
                "description" => "A new couple and their families reckon with modern love amid culture clashes, societal expectations and generational differences.",
                "imagepath" => "images/movie_images/866413.jpg",
            ],


            [
                "title" => "Peter Pan & Wendy",
                "slug" => "escape-to-neverlandi",
                "year" => "2023",
                "description" => "Wendy Darling, a young girl afraid to leave her childhood home behind, meets Peter Pan, a boy who refuses to grow up. Alongside her brothers and a tiny fairy, Tinker Bell, she travels with Peter to the magical world of Neverland. There, she encounters an evil pirate captain, Captain Hook, and embarks on a thrilling adventure that will change her life forever.",
                "imagepath" => "images/movie_images/420808.jpg",
            ],


            [
                "title" => "Beau Is Afraid",
                "slug" => "from-his-darkest-fears-comes-the-greatest-adventurei",
                "year" => "2023",
                "description" => "A paranoid man embarks on an epic odyssey to get home to his mother.",
                "imagepath" => "images/movie_images/798286.jpg",
            ],


            [
                "title" => "A Haunting in Venice",
                "slug" => "death-was-only-the-beginningi",
                "year" => "2023",
                "description" => "Celebrated sleuth Hercule Poirot, now retired and living in self-imposed exile in Venice, reluctantly attends a Halloween séance at a decaying, haunted palazzo. When one of the guests is murdered, the detective is thrust into a sinister world of shadows and secrets.",
                "imagepath" => "images/movie_images/945729.jpg",
            ],


            [
                "title" => "The Black Demon",
                "slug" => "nature-bites-backi",
                "year" => "2023",
                "description" => "Oilman Paul Sturges' idyllic family vacation turns into a nightmare when they encounter a ferocious megalodon shark that will stop at nothing to protect its territory. Stranded and under constant attack, Paul and his family must somehow find a way to get his family back to shore alive before it strikes again in this epic battle between humans and nature.",
                "imagepath" => "images/movie_images/890771.jpg",
            ],


            [
                "title" => "Nimona",
                "slug" => "a-new-hero-takes-shapei",
                "year" => "2023",
                "description" => "A knight framed for a tragic crime teams with a scrappy, shape-shifting teen to prove his innocence.",
                "imagepath" => "images/movie_images/961323.jpg",
            ],


            [
                "title" => "Sound of Freedom",
                "slug" => "fight-for-the-lighti-silence-the-darknessi",
                "year" => "2023",
                "description" => "The story of Tim Ballard, a former US government agent, who quits his job in order to devote his life to rescuing children from global sex traffickers.",
                "imagepath" => "images/movie_images/678512.jpg",
            ],


            [
                "title" => "The Out-Laws",
                "slug" => "meeting-the-in-laws-has-never-been-this-dangerousi",
                "year" => "2023",
                "description" => "A straight-laced bank manager is about to marry the love of his life. When his bank is held up by infamous Ghost Bandits during his wedding week, he believes his future in-laws who just arrived in town, are the infamous Out-Laws.",
                "imagepath" => "images/movie_images/921636.jpg",
            ],


            [
                "title" => "Boston Strangler",
                "slug" => "inspired-by-a-true-story",
                "year" => "2023",
                "description" => "Reporters Loretta McLaughlin and Jean Cole bravely pursue the story of the Boston Strangler at great personal risk, putting their own lives on the line in their quest to uncover the truth.",
                "imagepath" => "images/movie_images/881164.jpg",
            ],


            [
                "title" => "We Have a Ghost",
                "slug" => "set-your-spirit-freei",
                "year" => "2023",
                "description" => "After Kevin finds a ghost named Ernest haunting his new home, he becomes an overnight social media sensation. But when Kevin and Ernest go rogue to investigate the mystery of the latter's past, they become targets of the CIA.",
                "imagepath" => "images/movie_images/852096.jpg",
            ],


            [
                "title" => "Infinity Pool",
                "slug" => "find-out-what-kind-of-a-creature-you-really-arei",
                "year" => "2023",
                "description" => "While staying at an isolated island resort, James and Em are enjoying a perfect vacation of pristine beaches, exceptional staff, and soaking up the sun. But guided by the seductive and mysterious Gabi, they venture outside the resort grounds and find themselves in a culture filled with violence, hedonism, and untold horror. A tragic accident leaves them facing a zero tolerance policy for crime: either you'll be executed, or, if you’re rich enough to afford it, you can watch yourself die instead.",
                "imagepath" => "images/movie_images/667216.jpg",
            ],


            [
                "title" => "The Boogeyman",
                "slug" => "it-s-not-reali-it-s-not-reali-it-s-not-reali",
                "year" => "2023",
                "description" => "Still reeling from the tragic death of their mother, a teenage girl and her younger sister find themselves plagued by a sadistic presence in their house and struggle to get their grieving father to pay attention before it’s too late.",
                "imagepath" => "images/movie_images/532408.jpg",
            ],


            [
                "title" => "Flamin' Hot",
                "slug" => "the-flavor-you-knowi-the-story-you-don-ti",
                "year" => "2023",
                "description" => "The inspiring true story of Richard Montañez, the Frito Lay janitor who channeled his Mexican American heritage and upbringing to turn the iconic Flamin’ Hot Cheetos into a snack that disrupted the food industry and became a global pop culture phenomenon.",
                "imagepath" => "images/movie_images/626332.jpg",
            ],


            [
                "title" => "Cobweb",
                "slug" => "sooner-or-lateri-family-secrets-creep-outi",
                "year" => "2023",
                "description" => "Eight year old Peter is plagued by a mysterious, constant tapping from inside his bedroom wall—one that his parents insist is all in his imagination. As Peter's fear intensifies, he believes that his parents could be hiding a terrible, dangerous secret and questions their trustworthiness.",
                "imagepath" => "images/movie_images/709631.jpg",
            ],


            [
                "title" => "Strays",
                "slug" => "go-fetch-yourselfi",
                "year" => "2023",
                "description" => "When Reggie is abandoned on the mean city streets by his lowlife owner, Doug, Reggie is certain that his beloved owner would never leave him on purpose. But once Reggie falls in with Bug, a fast-talking, foul-mouthed stray who loves his freedom and believes that owners are for suckers, Reggie finally realizes he was in a toxic relationship and begins to see Doug for the heartless sleazeball that he is.",
                "imagepath" => "images/movie_images/912908.jpg",
            ],


            [
                "title" => "The Nun II",
                "slug" => "confess-your-sinsi",
                "year" => "2023",
                "description" => "In 1956 France, a priest is violently murdered, and Sister Irene begins to investigate. She once again comes face-to-face with a powerful evil.",
                "imagepath" => "images/movie_images/968051.jpg",
            ],


            [
                "title" => "Magic Mike's Last Dance",
                "slug" => "the-final-teasei",
                "year" => "2023",
                "description" => "Mike Lane takes to the stage again after a lengthy hiatus, following a business deal that went bust, leaving him broke and taking bartender gigs in Florida. For what he hopes will be one last hurrah, Mike heads to London with a wealthy socialite who lures him with an offer he can’t refuse… and an agenda all her own. With everything on the line, once Mike discovers what she truly has in mind, will he—and the roster of hot new dancers he’ll have to whip into shape—be able to pull it off?",
                "imagepath" => "images/movie_images/906221.jpg",
            ],


            [
                "title" => "They Cloned Tyrone",
                "slug" => "beware-cheap-imitationsi",
                "year" => "2023",
                "description" => "A series of eerie events thrusts an unlikely trio onto the trail of a nefarious government conspiracy lurking directly beneath their neighborhood.",
                "imagepath" => "images/movie_images/736769.jpg",
            ],


            [
                "title" => "Sharper",
                "slug" => "read-between-the-liesi",
                "year" => "2023",
                "description" => "A small, wealthy family in New York City gets progressively torn apart by secrets, lies, and the theft that orchestrates all of it.",
                "imagepath" => "images/movie_images/717980.jpg",
            ],


            [
                "title" => "No One Will Save You",
                "slug" => "a-home-invasion-no-one-saw-comingi",
                "year" => "2023",
                "description" => "An exiled anxiety-ridden homebody must battle an alien who's found its way into her home.",
                "imagepath" => "images/movie_images/820609.jpg",
            ],


            [
                "title" => "Die Hart",
                "slug" => "live-to-change",
                "year" => "2023",
                "description" => "Kevin Hart - playing a version of himself - is on a death-defying quest to become an action star. And with a little help from John Travolta, Nathalie Emmanuel, and Josh Hartnett - he just might pull it off.",
                "imagepath" => "images/movie_images/1077280.jpg",
            ],


            [
                "title" => "Chupa",
                "slug" => "discover-the-legendi",
                "year" => "2023",
                "description" => "While visiting family in Mexico, a lonely boy befriends a mythical creature hiding on his grandfather's ranch and embarks on the adventure of a lifetime.",
                "imagepath" => "images/movie_images/736790.jpg",
            ],


            [
                "title" => "The Devil Conspiracy",
                "slug" => "the-war-of-angels-has-come-to-earthi",
                "year" => "2023",
                "description" => "A powerful biotech company has breakthrough technology allowing them to clone history’s most influential people with just a few fragments of DNA. Behind this company is a cabal of Satanists that steals the shroud of Christ, putting them in possession of Jesus’ DNA. The clone will serve as the ultimate offering to the devil. The Archangel Michael comes to earth and will stop at nothing to end the devil’s conspiracy.",
                "imagepath" => "images/movie_images/296271.jpg",
            ],


            [
                "title" => "Retribution",
                "slug" => "all-roads-lead-to-the-truthi",
                "year" => "2023",
                "description" => "When a mysterious caller puts a bomb under his car seat, Matt Turner begins a high-speed chase across the city to complete a specific series of tasks. With his kids trapped in the back seat and a bomb that will explode if they get out of the car, a normal commute becomes a twisted game of life or death as Matt follows the stranger's increasingly dangerous instructions in a race against time to save his family.",
                "imagepath" => "images/movie_images/762430.jpg",
            ],


            [
                "title" => "The Equalizer 3",
                "slug" => "justice-knows-no-bordersi",
                "year" => "2023",
                "description" => "Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends' protector by taking on the mafia.",
                "imagepath" => "images/movie_images/926393.jpg",
            ],


            [
                "title" => "Marlowe",
                "slug" => "los-angeles-1939i-outside-the-spotlight-lies-a-city-of-secretsi",
                "year" => "2023",
                "description" => "Private detective Philip Marlowe becomes embroiled in an investigation involving a wealthy Californian family after a beautiful blonde hires him to track down her former lover.",
                "imagepath" => "images/movie_images/844417.jpg",
            ],


            [
                "title" => "Haunted Mansion",
                "slug" => "home-is-where-the-haunt-isi",
                "year" => "2023",
                "description" => "A woman and her son enlist a motley crew of so-called spiritual experts to help rid their home of supernatural squatters.",
                "imagepath" => "images/movie_images/616747.jpg",
            ],


            [
                "title" => "Mighty Morphin Power Rangers: Once & Always",
                "slug" => "a-mighty-morphin-reunion-30-years-in-the-makingi",
                "year" => "2023",
                "description" => "After tragedy strikes, an unlikely young hero takes her rightful place among the Power Rangers to face off against the team's oldest archnemesis.",
                "imagepath" => "images/movie_images/1068141.jpg",
            ],


            [
                "title" => "Crater",
                "slug" => "miles-from-earthi-their-adventure-beginsi",
                "year" => "2023",
                "description" => "After the death of his father, a boy growing up on a lunar mining colony takes a trip to explore a legendary crater, along with his four best friends, prior to being permanently relocated to another planet.",
                "imagepath" => "images/movie_images/620705.jpg",
            ],


            [
                "title" => "Love at First Sight",
                "slug" => "100i000-daily-flights-around-the-worldi-6-million-travelersi-one-connectioni",
                "year" => "2023",
                "description" => "Hadley and Oliver begin falling in love on a flight from New York to London, but when they lose each other at customs, can they defy all odds to reunite?",
                "imagepath" => "images/movie_images/353577.jpg",
            ],


            [
                "title" => "Champions",
                "slug" => "every-dream-team-starts-somewherei",
                "year" => "2023",
                "description" => "A stubborn and hotheaded minor league basketball coach is forced to train a Special Olympics team when he is sentenced to community service.",
                "imagepath" => "images/movie_images/933419.jpg",
            ],


            [
                "title" => "Inside",
                "slug" => "a-solitary-exhibitioni",
                "year" => "2023",
                "description" => "An art thief becomes trapped in a New York penthouse after his heist goes awry. Imprisoned with nothing but priceless works of art, he must use all his cunning and invention to survive.",
                "imagepath" => "images/movie_images/958196.jpg",
            ],


            [
                "title" => "White Men Can't Jump",
                "slug" => "play-hardi-hustle-harderi",
                "year" => "2023",
                "description" => "Seemingly opposite street hoopers, Jeremy, an injury prone former star, and Kamal, a has-been prodigy, team up to take one final shot at living out their dreams.",
                "imagepath" => "images/movie_images/920125.jpg",
            ],


            [
                "title" => "Pamela, A Love Story",
                "slug" => "she-defined-a-decadei-now-she-will-define-herselfi",
                "year" => "2023",
                "description" => "In her own words, through personal video and diaries, Pamela Anderson shares the story of her rise to fame, rocky romances and infamous sex tape scandal.",
                "imagepath" => "images/movie_images/1061671.jpg",
            ],


            [
                "title" => "Love Again",
                "slug" => "destiny-has-a-plani",
                "year" => "2023",
                "description" => "Mira Ray, dealing with the loss of her fiancé, sends a series of romantic texts to his old cell phone number… not realizing the number was reassigned to Rob Burns' new work phone. A journalist, Rob is captivated by the honesty in the beautifully confessional texts. When he’s assigned to write a profile of megastar Céline Dion, he enlists her help in figuring out how to meet Mira in person and win her heart.",
                "imagepath" => "images/movie_images/758336.jpg",
            ],


            [
                "title" => "A Good Person",
                "slug" => "sometimes-we-find-hope-where-we-least-expect-iti",
                "year" => "2023",
                "description" => "Allison's life falls apart following her involvement in a fatal accident. The unlikely relationship she forms with her would-be father-in-law helps her live a life worth living.",
                "imagepath" => "images/movie_images/800787.jpg",
            ],


            [
                "title" => "Warhorse One",
                "slug" => "worth-living-fori-worth-dying-fori",
                "year" => "2023",
                "description" => "A gunned down Navy SEAL Master Chief must guide a child to safety through a gauntlet of hostile Taliban insurgents and survive the brutal Afghanistan wilderness.",
                "imagepath" => "images/movie_images/1076487.jpg",
            ],


            [
                "title" => "BlackBerry",
                "slug" => "work-hardi-fail-hardi",
                "year" => "2023",
                "description" => "Two mismatched entrepreneurs – egghead innovator Mike Lazaridis and cut-throat businessman Jim Balsillie – joined forces in an endeavour that was to become a worldwide hit in little more than a decade. The story of the meteoric rise and catastrophic demise of the world's first smartphone.",
                "imagepath" => "images/movie_images/1016084.jpg",
            ],


            [
                "title" => "A Million Miles Away",
                "slug" => "it-takes-more-than-a-dream-to-reach-the-starsi",
                "year" => "2023",
                "description" => "The life of engineer and former NASA astronaut José M. Hernández, the first migrant farmworker to go to space.",
                "imagepath" => "images/movie_images/1002185.jpg",
            ],


            [
                "title" => "Reality",
                "slug" => "the-truth-cannot-be-redacted",
                "year" => "2023",
                "description" => "Augusta, Georgia, United States, June 3, 2017. After running some errands, Reality Winner returns home, where she is approached by two men.",
                "imagepath" => "images/movie_images/985617.jpg",
            ],


            [
                "title" => "The Monkey King",
                "slug" => "the-legend-has-arrived",
                "year" => "2023",
                "description" => "A stick-wielding monkey teams with a young girl on an epic quest for immortality, battling demons, dragons, gods — and his own ego — along the way.",
                "imagepath" => "images/movie_images/832502.jpg",
            ],


            [
                "title" => "Joy Ride",
                "slug" => "four-friendsi-one-tripi-no-lucki",
                "year" => "2023",
                "description" => "When Audrey's business trip to Asia goes sideways, she enlists the aid of Lolo, her irreverent, childhood best friend who also happens to be a hot mess; Kat, her college friend turned Chinese soap star; and Deadeye, Lolo's eccentric cousin. Their no-holds-barred, epic experience becomes a journey of bonding, friendship, belonging, and wild debauchery that reveals the universal truth of what it means to know and love who you are.",
                "imagepath" => "images/movie_images/864168.jpg",
            ],


            [
                "title" => "Justice League: Warworld",
                "slug" => "three-heroesi-three-worldsi-one-salvationi",
                "year" => "2023",
                "description" => "Until now, the Justice League has been a loose association of superpowered individuals. But when they are swept away to Warworld, a place of unending brutal gladiatorial combat, Batman, Superman, Wonder Woman and the others must somehow unite to form an unbeatable resistance able to lead an entire planet to freedom.",
                "imagepath" => "images/movie_images/1003581.jpg",
            ],


            [
                "title" => "Skinamarink",
                "slug" => "in-this-houseiii",
                "year" => "2023",
                "description" => "Two children wake up in the middle of the night to find their father is missing, and all the windows and doors in their home have vanished.",
                "imagepath" => "images/movie_images/994143.jpg",
            ],


            [
                "title" => "Clock",
                "slug" => "it%E2%80%99s-counting-down-for-a-reasoni",
                "year" => "2023",
                "description" => "On the eve of her 38th birthday, a woman desperately attempts to fix her broken biological clock.",
                "imagepath" => "images/movie_images/1085103.jpg",
            ],


            [
                "title" => "Vacation Friends 2",
                "slug" => "time-for-another-roundi",
                "year" => "2023",
                "description" => "Newly married couple Marcus and Emily invite their uninhibited besties Ron and Kyla to join them for a vacation when Marcus lands an all-expenses-paid trip to a Caribbean resort. When Kyla’s incarcerated father Reese is released and shows up at the resort unannounced, things get out of control, upending Marcus’ best laid plans and turning the vacation friends’ perfect trip into total chaos.",
                "imagepath" => "images/movie_images/869641.jpg",
            ],


            [
                "title" => "Dog Gone",
                "slug" => "to-find-what-s-losti-a-father-and-son-will-do-the-impossiblei",
                "year" => "2023",
                "description" => "When his beloved dog goes missing, a young man embarks on an incredible search with his parents to find him and give him life-saving medication.",
                "imagepath" => "images/movie_images/858408.jpg",
            ],


            [
                "title" => "Are You There God? It's Me, Margaret.",
                "slug" => "discovering-who-you-are-is-a-journey-that-lasts-a-lifetimei",
                "year" => "2023",
                "description" => "When her family moves from New York City to New Jersey, an 11-year-old girl navigates new friends, feelings, and the beginning of adolescence.",
                "imagepath" => "images/movie_images/555285.jpg",
            ],


            [
                "title" => "Big George Foreman",
                "slug" => "when-life-gives-you-a-second-chancei-don-t-do-it-for-yourselfi-do-it-for-everyone-you-lovei",
                "year" => "2023",
                "description" => "Fueled by an impoverished childhood, George Foreman channeled his anger into becoming an Olympic Gold medalist and World Heavyweight Champion, followed by a near-death experience that took him from the boxing ring to the pulpit. But when he sees his community struggling spiritually and financially, Foreman returns to the ring and makes history by reclaiming his title, becoming the oldest and most improbable World Heavyweight Boxing Champion ever.",
                "imagepath" => "images/movie_images/878361.jpg",
            ],


            [
                "title" => "Mafia Mamma",
                "slug" => "from-suburban-mom-to-mafia-doni",
                "year" => "2023",
                "description" => "A suburban American woman inherits her grandfather’s Mafia empire and, guided by the Firm’s trusted consigliere, defies everyone’s expectations, including her own, as the new head of the family business.",
                "imagepath" => "images/movie_images/809787.jpg",
            ],
        ];

        foreach ($movies as $movie) {
            Movie::factory($movie)->recycle(
                Genre::all(),
                // Actor::all(),
            )->create();
            // Movie::create($movie);
        }
    }
}
