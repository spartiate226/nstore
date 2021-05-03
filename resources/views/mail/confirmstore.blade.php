<div style="padding: 15px;margin: 7px;background-color: white;border: 2px solid black;text-align: center">
    <h2 style="background-color: #ffe015;color: #0a0e14">Bienvenu dans le cercle des emarchands Nayamax {{$content['prenom']}} {{$content['nom']}},Felicitation!!</h2>

    <p><b>Trouver ci-dessous les informations necessaire à la bonne marche de votre aventure de ecommerçant</b> </p>

    <h4>Informations de connexions :</h4>
    <ul>
        <li>Pseudonyme : {{$content['pseudonyme']}}</li>
        <li>Mot de passe : {{$content['password']}}</li>
    </ul>

    <h4>Liens :</h4>
    <ul>
        <li>Administrateur : <a href="{{'https://'.$content['slug']}}.mynayamax.com/panel/{{$content['pseudonyme']}}">https://{{$content['slug']}}.mynayamax.com/panel/{{$content['pseudonyme']}}</a></li>
        <li>Boutique :<a href="{{'https://'.$content['slug']}}{{$content['slug']}}.mynayamax.com">https://.mynayamax.com</a></li>
    </ul>
    <h4 style="margin-top: 15px">Merci pour votre confiance...</h4>
</div>
