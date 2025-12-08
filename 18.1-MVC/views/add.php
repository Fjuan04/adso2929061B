<?php 
$trainers = $data;
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
  <title>Create Pokemon</title>
</head>

<body class="bg-base-200 min-h-screen flex items-center justify-center">

  <div class="card w-full max-w-2xl bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-3xl mb-4">Create New Pokemon</h2>

      <form action="/pokemons/store" method="POST" class="space-y-4">


        <div>
          <label class="label"><span class="label-text text-lg">Name</span></label>
          <input type="text" name="name" required class="input input-bordered w-full" placeholder="e.g. Pikachu">
        </div>


        <div>
          <label class="label"><span class="label-text text-lg">Type</span></label>
          <select name="type" class="select select-bordered w-full" required>
            <option disabled selected>Select a type</option>
            <?php foreach ($types as $type => $class): ?>
              <option value="<?= $type ?>"><?= $type ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <div class="grid grid-cols-2 gap-4">

          <div>
            <label class="label">Strength: <span class="label-text">0</span></label>
            <input type="range" name="strength" class="input input-bordered w-full range" value="0" min="1" max="1000" required>
          </div>

          <div>
            <label class="label">Staming: <span class="label-text">0</span></label>
            <input type="range" name="staming" class="input input-bordered w-full range" value="0" min="1" max="1000" required>
          </div>

          <div>
            <label class="label">Speed: <span class="label-text">0</span></label>
            <input type="range" name="speed" class="input input-bordered w-full range" value="0" min="1" max="1000" required>
          </div>

          <div>
            <label class="label">Accuracy: <span class="label-text">0</span></label>
            <input type="range" name="accuracy" class="input input-bordered w-full range" value="0" min="1" max="1000" required>
          </div>

        </div>


        <div>
          <label class="label"><span class="label-text text-lg">Trainer</span></label>
          <select name="trainer_id" class="select select-bordered w-full" required>
            <option disabled selected>Select a trainer</option>
            <?php foreach ($trainers as $t): ?>
              <option value="<?= $t['id'] ?>"><?= htmlspecialchars($t['name']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <div>
          <label class="label"><span class="label-text text-lg">Image URL</span></label>
          <input 
            type="url" 
            name="image_url"
            placeholder="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png"
            class="input input-bordered w-full"
          >
        </div>


        <div class="flex justify-between mt-6">
          <a href="/pokemons" class="btn btn-neutral">Back</a>
          <button class="btn btn-success">Save Pokémon</button>
        </div>

      </form>
    </div>
  </div>
<script>
    const strength = document.querySelector('input[name="strength"]')
    const speed = document.querySelector('input[name="speed"]')
    const staming = document.querySelector('input[name="staming"]')
    const accuracy = document.querySelector('input[name="accuracy"]')

    const inputs = document.querySelectorAll('input[type="range"]')

    inputs.forEach(i => {
        i.addEventListener('input', e => {
            const span = i.previousElementSibling.querySelector('span') 
            span.textContent = i.value
        })
    })
</script>
</body>
</html>
