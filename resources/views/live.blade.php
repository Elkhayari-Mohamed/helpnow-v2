@if (Auth::user()->type_account == 'doctor')
    <script>
        var script = document.createElement("script");

        script.type = "text/javascript";

        script.addEventListener("load", function(event) {
            fetch('/your-server-endpoint-to-get-token')
                .then(response => response.json())
                .then(data => {
                    const meeting = new VideoSDKMeeting();

                    const config = {
                        name: "{{ $doctor->doctor->first_name . ' ' . $doctor->doctor->last_name }}",
                        apiKey: data.token, // Use the token from server
                        meetingId: "TeleConsult",
                        redirectOnLeave: "http://127.0.0.1:8000/doctors/Patients_list/",
                        micEnabled: true,
                        webcamEnabled: true,
                        participantCanToggleSelfWebcam: true,
                        participantCanToggleSelfMic: true,
                        joinScreen: {
                            visible: true, // Show the join screen ?
                            title: "Tele Health Quick Start", // Meeting title
                            meetingUrl: window.location.href, // Meeting joining url
                        },
                    };

                    meeting.init(config);
                })
                .catch(error => console.error(error));
        });

        script.src = "https://sdk.videosdk.live/js-sdk/0.0.63/videosdk.js";
        document.getElementsByTagName("head")[0].appendChild(script);
    </script>
@else
    <script>
        var script = document.createElement("script");

        script.type = "text/javascript";

        script.addEventListener("load", function(event) {
            const meeting = new VideoSDKMeeting();

            const config = {
                name: "{{ $patient->patient->first_name . ' ' . $patient->patient->last_name }}",
                apiKey: "2451357a-9560-437a-9a09-1c0d62a4b98a",
                meetingId: "TeleConsult",
                redirectOnLeave: "http://127.0.0.1:8000/patients/",
                micEnabled: true,
                webcamEnabled: true,
                participantCanToggleSelfWebcam: true,
                participantCanToggleSelfMic: true,
                joinScreen: {
                    visible: true, // Show the join screen ?
                    title: "Tele Health Quick Start", // Meeting title
                    meetingUrl: window.location.href, // Meeting joining url
                },
            };

            meeting.init(config);

        });
        script.src = "https://sdk.videosdk.live/js-sdk/0.0.63/videosdk.js";
        document.getElementsByTagName("head")[0].appendChild(script);
    </script>
@endif
