<script type="text/javascript"> 
document.getElementById("a1").classList.add("selA");
document.getElementById("a2").classList.remove("selA");
document.getElementById("a3").classList.remove("selA");
document.getElementById("a4").classList.remove("selA");
document.getElementById("a5").classList.remove("selA");
</script>
<div id="wrapper">
	<div class="contentClass">
		<div class="heading">
			<h2 class="EN">
				Mission / Payload
			</h2>
			<h2 class="DE">
				Mission
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="image" style="background-color: #171e2d; background-image: url('../img/earthGraphic.png')" ></div>
		<div class="text EN">
			<p>One of our main mission concepts is to implement a camera monitoring earth in the visible light spectrum. Besides that, another imaging module capturing light in the infrared spectrum would enable us to gather more detailed information about our earth. This information can be used to track the change in climate as well as a change in vegetation. </p>
			<p>To overcome limitations in cost and available space, a new multiplexing technique is being evaluated which could enable the use of two imaging modules interfaced by the one and the same processing unit. As a consequence, we are able to correlate visible landmarks on earth to specific thermal distributions, as seen by the IR imaging module. </p>

		</div>
		<div class="text DE">
			<p>Text deutsch...</p>
		</div>
	</div>

	<div class="contentClassRight">
		<div class="headingRight">
			<h2 class="EN">
				Construction
			</h2>
			<h2 class="DE">
				Konstruktion
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="imageRight" style="background-color: transparent; background-image: url('../img/Cubesat.png')" ></div>
		<div class="textRight EN">
			<p>Costruction text....</p>
		</div>
		<div class="textRight DE">
			<p>Konstruktion text....</p>
		</div>
	</div>

	<div class="contentClass">
		<div class="heading">
			<h2 class="EN">
				Power Managment
			</h2>
			<h2 class="DE">
				Energiesteuerung
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="image" style="background-color: black; background-image: url('../img/earth.jpg')" ></div>
		<div class="text EN">
			<p>The electrical power supply circuitry plays a crucial role in the Cubesat's electrical system. On the one hand it has to make sure that the power is efficiently distributed to all subsystems, but on the other hand, it's reliability must be exceptionally high. To comply with these demands, highly efficient boost-converters will be implemented in combination with a digital Maximum-Power-Point-Tracking algorithm in order to match the impedance of the solar cells. Since failures need to be taken into account, a less efficient but far more reliable analog MPPT circuitry will always be present to increase the system's redundancy.</p>

			<p>In case of a short circuit in any other subsystem, the anomaly can be detected through one of more than 20 sensors consistently monitoring current and voltage. To counteract the problem, every subsystem can individually be reset or shut down in a matter of milliseconds.</p>
		</div>
		<div class="text DE">
			<p>Die Stromversorgungseinheit spielt eine entscheidende Rolle in der Energieversorgungskette des Cubesats. Einerseits muss sichergestellt werden, dass die verfügbare Leistung mit hohen Wirkungsgräden auf alle Teilsysteme verteilt wird, auf der anderen Seite muss aber auch eine außergewöhnlich hohe Zuverlässigkeit gewährleistet werden. Um diesen Anforderungen gerecht zu werden, werden hocheffiziente Step-Up-Converter in Kombination mit einem digitalen Maximum-Power-Point-Tracking-Algorithmus zur Impedanzanpassung der Solarzellen eingesetzt. Da mögliche Ausfälle berücksichtigt werden müssen, wird immer eine weniger effiziente, aber weitaus zuverlässigere, analoge MPPT-Schaltung einsatzbereit sein, was die Redundanz des Systems deutlich erhöht.</p>
			
			<p>Ein Kurzschluss eines Teilsystems kann durch einen von mehr als 20 Sensoren erkannt werden, die Stromstärke und Spannung ständig überwachen. Um einen Gesamtausfall zu verhindern, kann jedes Teilsystem innerhalb von Millisekunden einzeln neu gestartet oder ganz abgeschaltet werden.</p>
		</div>
	</div>

	<div class="contentClassRight">
		<div class="headingRight">
			<h2 class="EN">
				Control System
			</h2>
			<h2 class="DE">
				Steuerungssystem
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="imageRight" style="background-color: white; background-image: url('../img/project/detumble.png')" ></div>
		<div class="textRight EN">
			<p>The goal of the control system is to monitor and regulate MeginaSat's attitude. For the attitude determination, we are going to use an array of sensors, including a gyroscope sensor, sun sensors, GPS, and magnetometers. As we are strongly restricted by price and size we only include three magnetorquers as actuators.</p>

			<p>We are currently evaluating different detumble and control methods in a physics simulation. While we have achieved good results when detumbling with a high orbit inclination, the results for an active control system still leave room for improvements. If you are interested, check out our <a href="https://github.com/MaxSchild/simulationFlight" target="_blank">current</a> and <a href="https://github.com/florianjuengermann/CubeSATSim" target="_blank">old</a> GitHub projects.</p>
			
		</div>
		<div class="textRight DE">
			<p>ADCS text....</p>
		</div>
	</div>

	<div class="contentClass">
		<div class="heading">
			<h2 class="EN">
				Image Capturing and Processing
			</h2>
			<h2 class="DE">
				Bildaufnahme und -verarbeitung
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="image" style="background-color: black; background-image: url('../img/earth.jpg')" ></div>
		<div class="text EN">
			<p>Image Capturing and Processing text....</p>
		</div>
		<div class="text DE">
			<p>Bildaufnahme und -verarbeitung text...</p>
		</div>
	</div>

	<div class="contentClassRight">
		<div class="headingRight">
			<h2 class="EN">
				Radio System
			</h2>
			<h2 class="DE">
				Funksystem
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="imageRight" style="background-color: transparent; background-image: url('../img/sponsor.png')" ></div>
		<div class="textRight EN">
			<p>Radio text....</p>
		</div>
		<div class="textRight DE">
			<p>Funksystem text....</p>
		</div>
	</div>
</div>