<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HelloYogi!</title>
        <!-- Ikona zakładki-->
        <link rel="icon" type="image/x-icon" href="assets/leaf.png" />
        <!-- Font Awesome icons (darmowa wersja, zestaw czcionek, dzięki którym wyglądają ładniej, lepiej się komponują)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- style.css-->
        <link href="css/styles.css" rel="stylesheet" />
		<script src="js/scripts.js"></script>
    </head>
    <body id="page-top">
        <!-- Nawigacja-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.png" alt="..." /></a> <!--logo w lewym, górym rogu-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">O Jodze</a></li>
                        <li class="nav-item"><a class="nav-link" href="#zajęcia">Zajęcia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#zapisy">Zapisy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Zespół</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Witaj w szkółce jogi!</div>
                <div class="masthead-heading text-uppercase">Zapraszamy do zapisów na zajęcia</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#zapisy">Zapisz się</a>
            </div>
        </header>
		
		<!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Korzyści z jogi</h2>
                    <h3 class="section-subheading text-muted">Joga korzystnie wpływa na całe ciało!</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/m1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Odmłodniejesz</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Twoje ciało się wzmocni, stanie bardziej elastyczne, odporne i gibkie, przez co automatycznie mniej podatne na urazy.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/m2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Zredukujesz stres</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Asany wyciszają system nerwowy, czego efektem jest zwiększona stabilność emocjonalna, psychiczna równowaga, większy dystans do otoczenia i wydarzeń.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/m3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Wzmocnisz odporność organizmu</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Norweskie badania ujawniły wpływ jogi na zmiany w ekspresji genów i odporności na poziomie komórkowym. Badanie wykazało, że poziom odporności podwyższa się już w ciągu 2 godzin od rozpoczęcia ćwiczeń.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/m4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Unikniesz chorób cywilizacyjnych</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kolejną korzyścią z jogi jest zmniejszenie ryzyka zawału serca, miażdżycy, udaru, cukrzycy i otyłości. Joga pomaga także w leczeniu arytmii serca. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
							
                                Dołącz
                                <br />
                                do nas!
                              
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
		
        		        		        <!-- Zapisy Grid-->
		
        <section class="page-section bg-light" id="zapisy">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Rejestracja</h2>
                    <h3 class="section-subheading text-muted">Podaj swoje dane</h3>
                </div>
                
        <?php
        include_once('klasy/User.php');
        include_once('klasy/RegistrationForm.php');
        include_once "klasy/Baza_rejestracja.php";
        $rf = new RegistrationForm(); //wyświetla formularz rejestracji
        $db = new Baza("localhost", "root", "", "klienci");
        if (filter_input(INPUT_POST, 'submit',
                        FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
            $user = $rf->checkUser(); //sprawdza poprawność danych
            if ($user === NULL){
                echo "<p>Niepoprawne dane rejestracji.</p>";
            } else {
                //echo "<p>Poprawne dane rejestracji:</p>";
                //$user->show();
                $db = new Baza("localhost", "root", "", "klienci");
                $user->saveDB($db);
            }
        }
        
        //echo "<p>Wszyscy uzytkownicy:</p>";
        //User::getAllUsersFromDB($db);

        ?>

        <div>
            <!-- Przygotowanie elementów do wyświetlania formularza rejestracji
            i danych i komunikatów informacyjnych -->
            <div id="formularz"></div>
            <div id='info'></div>
        </div>
    </body>

				
                
            </div>
        </section>
		
		
		
					<!-- Zajęcia-->
        <section class="page-section" id="zajęcia">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Rodzaje zajęć</h2>
                    <h3 class="section-subheading text-muted">Dopasuj je do siebie!</h3>
                </div>
				
				<div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
						<a href="obrazek1" target="_blank"><img src="assets/img/zajecia/joga370.png" alt="obrazek1" class="img-fluid"/></a></br></br>
                            <h4 class="card-title">Joga</h4>
                            <p class="card-text">Joga jest podróżą, która napełnia ciało inteligencją i energią, a umysłowi pozwala poszybować w przestworza. Joga jest formą samoopieki i troski o zdrowie. Daje dobre samopoczucie, radość i witalność.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#zapisy">Zapisy</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
						<a href="obrazek2" target="_blank"><img src="assets/img/zajecia/aerial370.png" alt="obrazek2" class="img-fluid"/></a></br></br>
                            <h4 class="card-title">Aerial Joga</h4>
                            <p class="card-text">Aerial joga to praktyka z użyciem chusty wertykalnej zawieszonej w formie hamaka. Rozwija świadomość ciała i przywraca balans na różnych poziomach naszego funkcjonowania… a poza tym daje dużo radości.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#zapisy">Zapisy</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
						<a href="#!" target="_blank"><img src="assets/img/zajecia/vinyasa370.png" alt="obrazek3" class="img-fluid"/></a></br></br>
                            <h4 class="card-title">Joga Vinyasa</h4>
                            <p class="card-text">Joga Vinyasa to bardziej dynamiczna joga, łącząca świadomy ruch z tempem Twojego oddechu. W trakcie zajęć wzmacniamy i otwieramy ciało pozwalając sobie uwolnić myśli i usłyszeć siebie. Zajęcia stosowne dla każdego kto pragnie odkryć terapeutyczną moc swojego ciała.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#zapisy">Zapisy</a></div>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
						<a href="obrazek4" target="_blank"><img src="assets/img/zajecia/zoga370.png" alt="obrazek4" class="img-fluid"/></a></br></br>
                            <h4 class="card-title">Zoga</h4>
                            <p class="card-text">Zoga jest zbiorem ćwiczeń wzmacniających i rozciągających, bazujących na asanach jogi z wykorzystaniem zasad Integracji Strukturalnej Anatomy Trains. Jest to nowatorska koncepcja, stanowiąca połączenie asan i technik manualnych oddziałujących na system nerwowo-mięśniowo-powięziowy. </p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#zapisy">Zapisy</a></div>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
						<a href="obrazek5" target="_blank"><img src="assets/img/zajecia/slowianska370.png" alt="obrazek5" class="img-fluid"/></a></br></br>
                            <h4 class="card-title">Gimnastyka słowiańska</h4>
                            <p class="card-text">Gimnastyka słowiańska to praktyka w kobiecym kręgu, która pozwala dotrzeć do pełni kobiecości i odnaleźć lekkość. Jest nauką szacunku dla ciała i słuchania jego potrzeb. Pracujemy na wielu poziomach: fizycznym, emocjonalnym oraz duchowym.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#zapisy">Zapisy</a></div>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
						<a href="obrazek6" target="_blank"><img src="assets/img/zajecia/senior370.png" alt="obrazek6" class="img-fluid"/></a></br></br>
                            <h4 class="card-title">Joga dla seniora 60+</h4>
                            <p class="card-text">Zajęcia jogi dla seniorów dedykowane są osobom w dojrzałym wieku ( 60+), które chcą zachować dobrą kondycję lub pozbyć się dolegliwości takich jak bóle pleców i stawów czy spadek koordynacji ruchowej. Joga dla seniorów jest dostosowana do potrzeb oraz możliwości praktykujących.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#zapisy">Zapisy</a></div>
                    </div>
                </div>
            </div>
			
            </div>
        </section>
        
		
		
		
							<!-- Zespół-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nasz zespół</h2>
 
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/zespół/1.jpg" alt="..." />
                             <h4>Nadia Zalewska</h4>
							<p><h6>Nauczycielka Jogi</h6></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/zespół/2.jpg" alt="..." />
                            <h4>Piotr Wierzbicki</h4>
							<p><h6>Nauczyciel Jogi/Jogi Vinyasa</h6></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Piotr Wierzbicki Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Piotr Wierzbicki Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Piotr Wierzbicki LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/zespół/3.jpg" alt="..." />
                             <h4>Ewa Korzeniowska</h4>
							<p><h6>Nauczycielka Gimnastyki Słowiańskiej/Aerial Jogi</h6></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ewa Korzeniowska Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ewa Korzeniowska Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ewa Korzeniowska LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
					<div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/zespół/4.jpg" alt="..." />
                            <h4>Anna Pniewska</h4>
							<p><h6>Nauczycielka Jogi Aerial/Jogi dla Seniora</h6></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
					<div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/zespół/5.jpg" alt="..." />
                            <h4>Gosia Koziara</h4>
							<p><h6>Nauczycielka Zogi/Gimnastyki Słowiańskiej</h6></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Nadia Zalewska LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
					<div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/zespół/6.jpg" alt="..." />
                            <h4>Tomasz Działowy</h4>
							<p><h6>Nauczyciel Zogi/Jogi</h6></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Tomasz Działowy Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Tomasz Działowy Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Tomasz Działowy LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
					
                </div>
                
            </div>
        </section>
		
		
		
		
						<!-- Kontakt-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontakt</h2>
                    
                </div>
				
				<div class="row gx-4 gx-lg-5">
					<div class="col-lg-6 col-xs-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.4898142873326!2d22.546273715760396!3d51.246890279593096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472257641c14cd37%3A0x77221723580fdede!2sCentrum%20Spotkania%20Kultur!5e0!3m2!1spl!2spl!4v1654534879545!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</br>
					</div>
					 <div class="col-lg-6 col-xs-6">
					 <div class="adres">
						<h3>Adres</h3></br>
						Plac Teatralny 1 </br>
						20-029 Lublin </br>
						Numer telefonu: 123456789 </br></br></br>
						<h3>Godziny otwarcia</h3></br>
						poniedziałek - piątek 8:00 - 20:00</br>
						sobota 10:00 - 19:00 </br>
						
						
						</div>
					</div>
				</div>
				
			
            </div>
        </section>
		
		
		
		
						<!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Joga Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer><!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
    </body>
</html>