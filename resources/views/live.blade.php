@if (Auth::user()->type_account == 'doctor')
    <script>
        var script = document.createElement("script");

        script.type = "text/javascript";

        script.addEventListener("load", function(event) {
            const meeting = new VideoSDKMeeting();

            const config = {
                name: "{{ $doctor->doctor->first_name . ' ' . $doctor->doctor->last_name }}",
                apiKey: "eda8aec6-1da8-4dc5-8291-8ec138c225cc",
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

        });
        script.src = "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.1/rtc-js-prebuilt.js";
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
                apiKey: "eda8aec6-1da8-4dc5-8291-8ec138c225cc",
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
        script.src = "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.1/rtc-js-prebuilt.js";
        document.getElementsByTagName("head")[0].appendChild(script);
    </script>
@endif
