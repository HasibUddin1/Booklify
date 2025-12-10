<?php
include_once "core/db_connection.php";

// Fetch top 5 unique destinations from hotels
$sql = "SELECT destination, images 
        FROM hotels 
        WHERE destination IS NOT NULL AND destination != '' 
        GROUP BY destination 
        ORDER BY COUNT(*) DESC 
        LIMIT 5";

$result = $conn->query($sql);
$destinations = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images = json_decode($row['images'], true) ?: [];
        $firstImage = $images[0] ?? 'default.jpg';

        $destinations[] = [
            'name' => $row['destination'],
            'image' => $firstImage
        ];
    }
}
?>

<section class="trending_destination_section max-w-6xl m-auto my-8">
    <h2 class="text-2xl font-bold mb-2">Trending destinations</h2>
    <p class="mb-6 text-gray-600">Most popular choices for travelers from Bangladesh</p>

    <div class="flex flex-wrap -mx-2">
        <?php foreach ($destinations as $index => $dest): ?>
            <?php
            // First row: 2 items -> width 1/2
            // Second row: 3 items -> width 1/3
            $widthClass = $index < 2 ? 'w-1/2' : 'w-1/3';
            ?>
            <div class="<?= $widthClass ?> px-2 mb-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="<?= htmlspecialchars($dest['image']) ?>"
                        alt="<?= htmlspecialchars($dest['name']) ?>"
                        class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <h3 class="text-white text-lg font-semibold text-center px-2"><?= htmlspecialchars($dest['name']) ?></h3>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>