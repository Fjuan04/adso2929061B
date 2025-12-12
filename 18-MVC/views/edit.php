<?php 
$trainers = $data['trainers'];
$pokemon  = $data['pokemon'];

$types = [
    "Normal"   => "badge badge-outline badge-neutral",
    "Fire"     => "badge badge-outline badge-error",
    "Water"    => "badge badge-outline badge-info",
    "Grass"    => "badge badge-outline badge-success",
    "Electric" => "badge badge-outline badge-warning",
    "Ice"      => "badge badge-outline badge-info",        
    "Fighting" => "badge badge-outline badge-secondary",   
    "Poison"   => "badge badge-outline badge-accent",      
    "Ground"   => "badge badge-outline badge-warning",     
    "Flying"   => "badge badge-outline badge-primary",
    "Psychic"  => "badge badge-outline badge-secondary",
    "Bug"      => "badge badge-outline badge-success",     
    "Rock"     => "badge badge-outline badge-neutral",
    "Ghost"    => "badge badge-outline badge-accent",
    "Dragon"   => "badge badge-outline badge-primary",
    "Dark"     => "badge badge-outline badge-neutral",
    "Steel"    => "badge badge-outline badge-primary",
    "Fairy"    => "badge badge-outline badge-accent"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Edit Pokémon</title>
</head>

<body class="bg-base-200 min-h-screen flex items-center justify-center">

  <div class="card w-full max-w-2xl bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-3xl mb-4 capitalize">Edit Pokémon: <?= htmlspecialchars($pokemon['name']) ?></h2>

      <form action="/pokemons/<?= $pokemon['id'] ?>/update" method="POST" class="space-y-4">

        <div>
          <label class="label"><span class="label-text text-lg">Name</span></label>
          <input 
            type="text" 
            name="name" 
            required 
            class="input input-bordered w-full"
            value="<?= htmlspecialchars($pokemon['name']) ?>">
        </div>

        <div>
          <label class="label"><span class="label-text text-lg">Type</span></label>
          <select name="type" class="select select-bordered w-full" required>
            <?php foreach ($types as $type => $class): ?>
              <option value="<?= $type ?>" 
                <?= $pokemon['type'] === $type ? 'selected' : '' ?>>
                <?= $type ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="grid grid-cols-2 gap-4">

          <div>
            <label class="label">
              Strength: <span><?= $pokemon['strength'] ?></span>
            </label>
            <input 
              type="range" 
              name="strength" 
              class="range w-full" 
              min="1" 
              max="1000"
              value="<?= $pokemon['strength'] ?>">
          </div>

          <div>
            <label class="label">
              Staming: <span><?= $pokemon['staming'] ?></span>
            </label>
            <input 
              type="range" 
              name="staming" 
              class="range w-full" 
              min="1" 
              max="1000"
              value="<?= $pokemon['staming'] ?>">
          </div>

          <div>
            <label class="label">
              Speed: <span><?= $pokemon['speed'] ?></span>
            </label>
            <input 
              type="range" 
              name="speed" 
              class="range w-full" 
              min="1" 
              max="1000"
              value="<?= $pokemon['speed'] ?>">
          </div>

          <div>
            <label class="label">
              Accuracy: <span><?= $pokemon['accuracy'] ?></span>
            </label>
            <input 
              type="range" 
              name="accuracy" 
              class="range w-full" 
              min="1" 
              max="1000"
              value="<?= $pokemon['accuracy'] ?>">
          </div>

        </div>

        <div>
          <label class="label"><span class="label-text text-lg">Trainer</span></label>
          <select name="trainer_id" class="select select-bordered w-full" required>
            <?php foreach ($trainers as $t): ?>
              <option value="<?= $t['id'] ?>"
                <?= $pokemon['trainer_id'] == $t['id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($t['name']) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div>
          <label class="label"><span class="label-text text-lg">Image URL</span></label>
          <input 
            type="text" 
            name="image_url"
            value="<?= htmlspecialchars($pokemon['image_url']) ?>"
            class="input input-bordered w-full"
          >
        </div>

        <div class="flex justify-between mt-6">
          <a href="/pokemons" class="btn btn-neutral">Cancel</a>
          <button class="btn btn-primary">Update Pokémon</button>
        </div>

      </form>
    </div>
  </div>

<script>
    const inputs = document.querySelectorAll('input[type="range"]');

    inputs.forEach(i => {
        i.addEventListener('input', () => {
            const span = i.previousElementSibling.querySelector('span');
            span.textContent = i.value;
        });
    });
</script>

</body>
</html>
