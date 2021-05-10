<!-- 
  
  fonction renvoie le contenu de la recherche => get_search_query()
  fonction qui permet de génerer le chemin à partir de la page d'accueil => home_url('/')
  champ qui permet de taper de la recherche => name="s"

-->

<form class="form-inline my-2 my-lg-0" action="<?= esc_url(home_url('/')) ?>" >
    <input class="form-control mr-sm-2" type="search" name="s" placeholder="Recherche" aria-label="Search" value="<?= get_search_query() ?>">
    <button class="btn btn-outline my-2 my-sm-0" type="submit">Recherche</button>
</form>