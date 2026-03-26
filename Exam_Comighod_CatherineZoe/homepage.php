<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit;
}

$anime_titles = [
    "Spy x Family Season 3",
    "Kakegurui: Compulsive Gambler",
    "Demon Slayer: Kimetsu no Yaiba",
    "Fruit Basket",
    "Haikyuu!!: To the Top",
    "The Apothecary Diaries",
    "Attack On Titan",
    "One Piece",
];

$anime_images = [
    "spyxfamily.jpg",
    "kakegurui.jpg",
    "demonslayer.jpg",
    "fruitbasket.jpg",
    "haikyuu.jpg",
    "apodiary.jpg",
    "attack.jpg",
    "one.jpg",
];

$anime_eps = [6, 7, 9, 3, 4, 1, 5, 21];

$anime_desc = [
    "IDespite occasional setbacks, Operation Strix has remained on track to extract sensitive information from the enigmatic politician Donovan Desmond. To this end, spy Loid Forger has managed to maintain his pretend family consisting of his telepathic daughter, Anya; assassin wife, Yor; and their clairvoyant dog, Bond.",
    "Unlike many schools, attending Hyakkaou Private Academy prepares students for their time in the real world. Since many of the students are the children of the richest people in the world, the academy has its quirks that separate it from all the others.",
    "Alongside the mysterious group calling themselves the Demon Slayer Corps, Tanjirou will do whatever it takes to slay the demons and protect the remnants of his beloved sister's humanity.",
    "Tohru Honda thought her life was headed for misfortune when a family tragedy left her living in a tent. When her small home is discovered by the mysterious Soma clan, she suddenly finds herself living with Yuki, Kyo, and Shigure Soma. But she quickly learns their family has a bizarre secret of their own: when hugged by the opposite sex, they turn into the animals of the Zodiac!",
    "As the much-anticipated national tournament approaches, the members of Karasuno's volleyball team attempt to overcome their weak points and refine their skills, all while aiming for the top!",
    "Obsessed with poison and medicine, a servant in the Emperor’s palace draws on her roots as a healer in the red light district to solve mysterious cases.",
    "After a Colossal Titan destroys his home and kills his mother, Eren Jaeger joins the Scout Regiment with his friends, Mikasa and Armin, only to discover he can transform into a Titan himself. As Eren fights for humanity’s survival, he uncovers dark conspiracies, political intrigue, and the terrifying origins of the Titans.",
    "Monkey D. Luffy refuses to let anyone or anything stand in the way of his quest to become the king of all pirates. With a course charted for the treacherous waters of the Grand Line and beyond, this is one captain who'll never give up until he's claimed the greatest treasure on Earth: the Legendary One Piece!",
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="video-bg-wrapper">
        <video class="video-bg" src="animevid.mp4" autoplay muted loop playsinline></video>
        <div class="video-overlay"></div>

        <!-- Navbar -->
        <nav class="navbar">
            <a href="index.php" class="navbar-brand">
                <img
                    class="navbar-logo"
                    src="logo.jpg"
                    onerror="this.style.background='#e87c1e';this.src='';"
                    alt="Logo" />
                <span class="navbar-title">GHOUL ANIME HUB
                </span>
            </a>
            <div class="navbar-actions">
                <span style="color:#aaa;font-size:.9rem;margin-right:8px;">
                    Hi, <?= htmlspecialchars($_SESSION['registered_name'] ?? 'User') ?>
                </span>

                <a href="logout.php" class="btn-outline btn-logout">Logout</a>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="homepage-main">

            <div class="anime-grid">
                <?php for ($i = 0; $i < count($anime_titles); $i++): ?>
                    <div class="anime-card">
                        <img
                            src="<?= htmlspecialchars($anime_images[$i]) ?>"
                            alt="<?= htmlspecialchars($anime_titles[$i]) ?>"
                            onerror="this.src='https://via.placeholder.com/300x220?text=No+Image';" />
                        <div class="anime-card-body">
                            <h3><?= htmlspecialchars($anime_titles[$i]) ?></h3>
                            <p><?= htmlspecialchars($anime_desc[$i]) ?></p>
                        </div>
                        <div class="anime-card-footer">
                            <span class="anime-ep">Ep. <?= $anime_eps[$i] ?></span>
                            <a href="#" class="btn-watch">Watch &#9654;</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <div>Copyright &copy; 2026. All rights reserved.</div>
        </footer>
    </div>
</body>

</html>