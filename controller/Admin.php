<?php
class Admin extends Controller
{

function index(){

	$variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
	$this-> set($variable);
	$this->render('index');
}

function gestionproduit() {
    $this->render('GestionProduit');
}

function gestionproduitajout() {
    $this->render('GestionProduitAjout');
}

function gestionproduitmodif() {
   $this->render('GestionProduitModif');
}

function gestionproduitsupp() {
$this->render('GestionProduitSupp');
}

function gestionresultatmatch(){
	$this->render('GestionResultatMatch');
}

function gestionresultatmatchmodif(){
	$this->render('GestionResultatMatchModif');
}

function gestionprochainmatch(){
	$this->render('GestionProchainMatch');
}

function gestionprochainmatchmodif(){
	$this->render('GestionProchainMatchModif');
}

function gestionbureau(){
	$this->render('GestionBureau');
}

function gestionbureaumodif(){
	$this->render('GestionBureauModif');
}

function gestionbureausupp(){
	$this->render('GestionBureauSupp');
}

function gestionbureauajout(){
	$this->render('GestionBureauAjout');
}

function gestionentrainement(){
	$this->render('GestionEntrainement');
}

function gestionentrainementmodif(){
	$this->render('GestionEntrainementModif');
}

function gestionentrainementsupp(){
	$this->render('GestionEntrainementSupp');
}

function gestionentrainementajout(){
	$this->render('GestionEntrainementAjout');
}
function gestionentrainementajoutimage(){
	$this->render('GestionEntrainementAjoutImage');
}
function gestionentrainementsuppimage(){
	$this->render('GestionEntrainementSuppImage');
}

function gestionprixlicence(){
	$this->render('GestionPrixLicence');
}

function gestionprixlicencemodif(){
	$this->render('GestionPrixLicenceModif');
}

function gestionhoraireentrainement(){
	$this->render('GestionHoraireEntrainement');
}

function gestionhoraireentrainementmodif(){
	$this->render('GestionHoraireEntrainementModif');
}

function gestioninfoclub(){
	$this->render('GestionInfoClub');
}

function gestioninfoclubmodif(){
	$this->render('GestionInfoClubModif');
}

function formulairedoc(){
	$this->render('formulaireDoc');
}

function formulaireimage(){
	$this->render('formulaireImage');
}

function afficherImage(){
	require_once('view/Admin/fonction.php');
	$_SESSION['success'] = 1;
	// Nom du fichier avec la date de l'upload pour éviter doublons dans le répertoire
	$nouveauNom = $_POST['Libelle'];
	// Appel de la fonction de transfert du fichier fonctions.php qui renvoie le message à afficher
	// On précise le nom du champ du formulaire, le nouveau nom du fichier, et le chemin où placer le fichier
	echo TransfertImage("monimage", $nouveauNom, "asset/images/");
    //Redirection vers la page formulaireImage
    header('Location: https://www.esbonchamp-tdt.fr/admin/formulaireimage');
}

function afficherDoc(){
	require_once('view/Admin/fonction.php');
	$_SESSION['success'] = 1;
	// Nom du fichier avec la date de l'upload pour éviter doublons dans le répertoire
	$nouveauNom = $_POST['Libelle'];
	// Appel de la fonction de transfert du fichier fonctions.php qui renvoie le message à afficher
	// On précise le nom du champ du formulaire, le nouveau nom du fichier, et le chemin où placer le fichier
	echo TransfertDocument("mondocument", $nouveauNom, "asset/images/");
    //Redirection vers la page formulaireImage
    header('Location: https://www.esbonchamp-tdt.fr/admin/formulairedoc');
}

function gestionsalle(){
	$this->render('GestionSalle');
}

function gestionsallemodif(){
	$this->render('GestionSalleModif');
}

function gestionsallesupp(){
	$this->render('GestionSalleSupp');
}

function gestionsalleajout(){
	$this->render('GestionSalleAjout');
}

function gestionsalleajoutimage(){
	$this->render('GestionSalleAjoutImage');
}

function gestionsallesuppimage(){
	$this->render('GestionSalleSuppImage');
}

function gestionbureauajoutimage(){
	$this->render('GestionBureauAjoutImage');
}

function gestionbureausuppimage(){
	$this->render('GestionBureauSuppImage');
}

function gestionproduitajoutimage(){
	$this->render('GestionProduitAjoutImage');
}

function gestionproduitsuppimage(){
	$this->render('GestionProduitSuppImage');
}
function gestionequipe(){
	$this->render('GestionEquipe');
}
function gestionequipeajout(){
	$this->render('GestionEquipeAjout');
}
function gestionequipemodif(){
	$this->render('GestionEquipeModif');
}
function gestionequipesupp(){
	$this->render('GestionEquipeSupp');
}
function gestionequipeajoutimage(){
	$this->render('GestionEquipeAjoutImage');
}

function gestionequipesuppimage(){
	$this->render('GestionEquipeSuppImage');
}
function gestioncompet(){
	$this->render('GestionCompet');
}
function gestioncompetajout(){
	$this->render('GestionCompetAjout');
}
function gestioncompetmodif(){
	$this->render('GestionCompetModif');
}
function gestioncompetsupp(){
	$this->render('GestionCompetSupp');
}
function gestioncompetajoutimage(){
	$this->render('GestionCompetAjoutImage');
}
function gestioncompetsuppimage(){
	$this->render('GestionCompetSuppImage');
}
function gestionevenement(){
	$this->render('GestionEvenement');
}
function gestionevenementajout(){
	$this->render('GestionEvenementAjout');
}
function gestionevenementmodif(){
	$this->render('GestionEvenementModif');
}
function gestionevenementsupp(){
	$this->render('GestionEvenementSupp');
}
function gestionevenementajoutimage(){
	$this->render('GestionEvenementAjoutImage');
}
function gestionevenementsuppimage(){
	$this->render('GestionEvenementSuppImage');
}
function gestionmedia(){
	$this->render('GestionMedia');
}
function gestionmediaajout(){
	$this->render('GestionMediaAjout');
}
function gestionmediamodif(){
	$this->render('GestionMediaModif');
}
function gestionmediasupp(){
	$this->render('GestionMediaSupp');
}
function gestionmediaajoutimage(){
	$this->render('GestionMediaAjoutImage');
}
function gestionmediasuppimage(){
	$this->render('GestionMediaSuppImage');
}
function gestionslide(){
	$this->render('GestionSlide');
}
function gestionslidemodif(){
	$this->render('GestionSlideModif');
}
function gestionslidesupp(){
	$this->render('GestionSlideSupp');
}
function gestionslideajout(){
	$this->render('GestionSlideAjout');
}
function gestionslideajoutimage(){
	$this->render('GestionSlideAjoutImage');
}
function gestionslidesuppimage(){
	$this->render('GestionSlideSuppImage');
}
}