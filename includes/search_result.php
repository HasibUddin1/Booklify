<?php
if (!isset($searchResults) || !is_array($searchResults)) {
    $searchResults = [];
}
?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div class="mt-6 max-w-6xl mx-auto">
        <?php if (count($searchResults) == 0): ?>
            <p class="text-center text-red-500">No hotels found.</p>
        <?php else: ?>
            <?php foreach ($searchResults as $hotel): ?>
                <div class="border rounded p-4 mb-4 flex gap-4">
                    <div class="w-48 h-32 overflow-hidden rounded">
                        <?php
                        // Images
                        $images = json_decode($hotel['images'], true) ?: [];
                        $firstImage = $images[0] ?? 'default.jpg';
                        ?>
                        <img src="<?php echo $firstImage; ?>" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-xl"><?php echo $hotel['name']; ?></h2>
                        <p class="text-gray-600"><?php echo $hotel['location']; ?></p>
                        <p class="mt-2"><?php echo $hotel['description']; ?></p>
                        <p class="mt-2 font-semibold">Max Guests: <?php echo $hotel['max_guests']; ?></p>
                        <a href="single_hotel.php?id=<?php echo $hotel['id']; ?>" class="mt-2 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            View Hotel
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>