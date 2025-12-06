<?php 
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
  <title>Welcome MVC</title>
</head>

<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-5xl font-bold mb-10">Model View Controller</h1>
        <a href="" class="btn btn-success mb-8">Add Pokemon <svg xmlns="http://www.w3.org/2000/svg" class="size-8"  viewBox="0 0 24 24"><path fill="#ffffff" d="M11 13v3q0 .425.288.713T12 17t.713-.288T13 16v-3h3q.425 0 .713-.288T17 12t-.288-.712T16 11h-3V8q0-.425-.288-.712T12 7t-.712.288T11 8v3H8q-.425 0-.712.288T7 12t.288.713T8 13zm1 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg></a>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
          <table class="table">
            <!-- head -->
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <?php foreach ($data as $pokemon): ?> 
              <tr class="">
                <td><?= htmlspecialchars($pokemon['id']) ?></td>
                <td>
                  <div class="avatar">
                  <div class="mask mask-squircle h-12 w-12">
                    <img
                      src="<?=$pokemon['image_url']?>"
                      alt="Avatar" />
                  </div>
                </div>
                </td>
                <td><?= htmlspecialchars($pokemon['name']) ?></td>
                <td class="">
                    <span class="<?= $types[$pokemon['type']]?> "><?= $pokemon['type'] ?></span>
                </td>
                <td>
                  <a href="/pokemons/<?= $pokemon['id'] ?>" class="btn btn-neutral"><svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path fill="#ffffff" d="M10 .188A9.81 9.81 0 0 0 .187 10A9.81 9.81 0 0 0 10 19.813c2.29 0 4.393-.811 6.063-2.125l.875.875a1.845 1.845 0 0 0 .343 2.156l4.594 4.625c.713.714 1.88.714 2.594 0l.875-.875a1.84 1.84 0 0 0 0-2.594l-4.625-4.594a1.82 1.82 0 0 0-2.157-.312l-.875-.875A9.812 9.812 0 0 0 10 .188M10 2a8 8 0 1 1 0 16a8 8 0 0 1 0-16M4.937 7.469a5.45 5.45 0 0 0-.812 2.875a5.46 5.46 0 0 0 5.469 5.469a5.5 5.5 0 0 0 3.156-1a7 7 0 0 1-.75.03a7.045 7.045 0 0 1-7.063-7.062c0-.104-.005-.208 0-.312"/></svg></a>
                  <a href="" class="btn btn-neutral"><svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg></a>
                  <a href="" class="btn btn-error"><svg class="size-4" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="#ffffff" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z"/></svg></a>
                </td>
              </tr>
              
        <?php endforeach ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</body>

</html>