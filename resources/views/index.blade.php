
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sertifikasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Montserrat", sans-serif;
    }
    /* Smooth slide down/up animation using max-height and opacity */
    .collapsible-content {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, opacity 0.4s ease;
    }
    .collapsible-content.open {
      opacity: 1;
      max-height: 1000px; /* large enough to show content */
    }
    /* Align inner table headers with main table headers */
    .inner-table th:nth-child(1) {
      width: 25%;
      text-align: left;
      padding-left: 0.75rem; /* px-3 */
    }
    .inner-table th:nth-child(2),
    .inner-table th:nth-child(3),
    .inner-table th:nth-child(4) {
      width: 25%;
      text-align: center;
    }
    /* Align inner table cells similarly */
    .inner-table td:nth-child(1) {
      padding-left: 0.75rem; /* px-3 */
    }
    .inner-table td:nth-child(2),
    .inner-table td:nth-child(3),
    .inner-table td:nth-child(4) {
      text-align: center;
    }
  </style>
</head>
<body class="bg-white min-h-screen flex flex-col">
  <!-- Header -->
  <header class="flex justify-between items-center border-b border-gray-200 px-6 py-3">
    <div class="flex items-center space-x-2">
      <img
        alt="Pelindo Multi Terminal logo, blue stylized P icon with text Pelindo Multi Terminal"
        class="w-60 h-30 object-contain"
        height="40"
        width="40"
        src="{{ asset('front/images/spmt.png') }}"
      />
    </div>
    <button aria-label="Logout" class="text-black text-2xl">
      <a href="{{ route('filament.admin.auth.login') }}" aria-label="Login" class="text-black text-2xl">
    <i class="fas fa-sign-in-alt"></i>
    </a>
    </button>
  </header>
  <div class="flex flex-1">
    <!-- Sidebar -->
    <nav class="bg-gray-100 w-16 flex flex-col items-center py-6">
      <button aria-label="Home" class="text-gray-500 text-xl">
        <i class="fas fa-home"></i>
      </button>
    </nav>
    <!-- Main content -->
    <main class="flex-1 p-6 overflow-x-auto">
      <h1 class="text-2xl font-normal mb-6">Daftar Sertifikasi</h1>
      <!-- Boxes row centered with rounded corners -->
     <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <!-- ISPS CODE -->
<div class="swiper-slide">
  <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
    <div class="text-5xl text-gray-700 mb-2">
      <i class="fas fa-shield-alt"></i>
    </div>
    <div class="text-xl font-bold text-gray-900">ISPS CODE</div>
    <div class="text-4xl font-extrabold text-gray-800 mt-2">
      {{ $totalIsps }}
    </div>
    <div class="text-sm text-gray-600 mt-1 flex items-center gap-1">
      {{ $activeIsps }} Sertifikasi aktif
      <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
    </div>
  </div>
</div>


    <!-- ISO 9001 -->
    <div class="swiper-slide">
      <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="text-5xl text-gray-700 mb-2">
          <i class="fas fa-clipboard-check"></i>
        </div>
        <div class="text-xl font-bold text-gray-900">ISO 9001</div>
        <div class="text-4xl font-extrabold text-gray-800 mt-2">{{ $totalIso9001 }}</div>
        <div class="text-sm text-gray-600 mt-1 flex items-center gap-1">
        {{ $activeIso9001 }} Sertifikasi aktif
          <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
        </div>
      </div>
    </div>

    <!-- ISO 14001 -->
    <div class="swiper-slide">
      <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="text-5xl text-gray-700 mb-2">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="text-xl font-bold text-gray-900">ISO 14001</div>
        <div class="text-4xl font-extrabold text-gray-800 mt-2">{{ $totalIso14001 }}</div>
        <div class="text-sm text-gray-600 mt-1 flex items-center gap-1">
          {{ $activeIso14001 }} Sertifikasi aktif
          <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
        </div>
      </div>
    </div>

    <!-- K3 -->
    <div class="swiper-slide">
      <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="text-5xl text-gray-700 mb-2">
          <i class="fas fa-hard-hat"></i>
        </div>
        <div class="text-xl font-bold text-gray-900">ISO 45001</div>
        <div class="text-4xl font-extrabold text-gray-800 mt-2">{{ $totalIso45001 }}</div>
        <div class="text-sm text-gray-600 mt-1 flex items-center gap-1">
          {{ $activeIso45001 }} Sertifikasi aktif
          <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
        </div>
      </div>
    </div>

    <!-- ISO 37001 -->
    <div class="swiper-slide">
      <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="text-5xl text-gray-700 mb-2">
          <i class="fas fa-university"></i>
        </div>
        <div class="text-xl font-bold text-gray-900">ISO 37001</div>
        <div class="text-4xl font-extrabold text-gray-800 mt-2">{{ $totalIso37001 }}</div>
        <div class="text-sm text-gray-600 mt-1 flex items-center gap-1">
          {{ $activeIso37001 }} Sertifikasi aktif
          <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- SwiperJS Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 16,
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
    loop: false,
  });
</script>



      <div class="overflow-x-auto w-full">
        <table
          class="w-full border-collapse rounded-lg overflow-hidden"
        >
          <thead>
            <tr
              class="bg-gray-300 text-center text-sm font-semibold text-gray-800"
            >
              <th class="py-3 px-6 rounded-tl-lg text-center align-middle">
                Jenis Sertifikasi
              </th>
              <th class="py-3 px-6 text-center align-middle">
                Expired
              </th>
              <th class="py-3 px-6 rounded-tr-lg text-center align-middle">
                Dokumen
              </th>
            </tr>
          </thead>
          <tbody class="text-gray-900 text-base">
            <!-- ISPS Code row -->
            <tr>
              <td class="py-4 px-8 flex items-center space-x-3 justify-center border border-transparent">
                <button aria-label="Toggle ISPS Code details" class="text-gray-600 text-lg leading-none" id="isps-toggle">
                  <i class="fas fa-chevron-down" id="isps-icon"></i>
                </button>
                <span>ISPS Code</span>
              </td>
              <td class="py-4 px-6 text-center font-normal align-middle">-</td>
              <td class="py-4 px-6 text-center font-normal align-middle text-2xl text-gray-700">
                <button aria-label="Lihat Dokumen" title="Lihat Dokumen" class="text-gray-700">
                  <i class="fas fa-file-alt"></i>
                </button>
              </td>
            </tr>
            <tr class="collapsible-content hidden" id="isps-details-row" aria-hidden="true">
              <td class="px-8 pb-6" colspan="4">
                <div class="border border-gray-300 rounded-lg p-4 overflow-y-auto max-h-40" style="scrollbar-width: thin;">
                  <table class="w-full text-sm text-left text-gray-900 inner-table">
                    <thead>
                      
                      <tr class="border-b border-gray-300 font-semibold">
                        <th>No Sertifikat</th>
                        <th>Branch</th>
                        <th>Tanggal Berlaku</th>
                        <th>Tanggal Expired</th>
                        <th>Dokumen</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ispsCertificates as $cert)
                      <tr>
                        <td class="py-1 px-3 font-normal cursor-pointer">{{ $cert->no_certification }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->branch }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->start_date }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->expired_date }}</td>
                        <td class="py-1 px-3 font-normal text-center">
                          @if ($cert->pdf_path)
                            <a
                              href="{{ asset('storage/' . $cert->pdf_path) }}"
                              download
                              class="text-blue-600 hover:underline"
                              title="ISPS"
                            >
                              <i class="fas fa-download"></i>
                            </a>
                          @else
                            <span class="text-gray-400 italic">No File</span>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
            <!-- ISO 9001 row -->
            <tr>
              <td class="py-4 px-8 flex items-center space-x-3 justify-center border border-transparent">
                <button aria-label="Toggle ISO 9001 details" class="text-gray-600 text-lg leading-none" id="iso9001-toggle">
                  <i class="fas fa-chevron-down" id="iso9001-icon"></i>
                </button>
                <span>ISO 9001</span>
              </td>
              <td class="py-4 px-6 text-center font-semibold align-middle">06/10/2025</td>
              <td class="py-4 px-6 text-center font-normal align-middle text-2xl text-gray-700">
                <button aria-label="Lihat Dokumen" title="Lihat Dokumen" class="text-gray-700">
                  <i class="fas fa-file-alt"></i>
                </button>
              </td>
            </tr>
            <tr class="collapsible-content hidden" id="iso9001-details-row" aria-hidden="true">
              <td class="px-8 pb-6" colspan="4">
                <div class="border border-gray-300 rounded-lg p-4 overflow-y-auto max-h-40" style="scrollbar-width: thin;">
                  <table class="w-full text-sm text-left text-gray-900 inner-table">
                    <thead>
                      <tr class="border-b border-gray-300 font-semibold">
                        <th>No Sertifikat</th>
                        <th>Branch</th>
                        <th>Tanggal Berlaku</th>
                        <th>Tanggal Expired</th>
                        <th>Dokumen</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($iso9001Certificates as $cert)
                    <tr>
                      <td class="py-1 px-3 font-normal cursor-pointer">{{ $cert->no_certification }}</td>
                      <td class="py-1 px-3 font-normal">{{ $cert->branch }}</td>
                      <td class="py-1 px-3 font-normal">{{ $cert->start_date }}</td>
                      <td class="py-1 px-3 font-normal">{{ $cert->expired_date }}</td>
                      <td class="py-1 px-3 font-normal text-center">
                        @if ($cert->pdf_path)
                          <a
                            href="{{ asset('storage/' . $cert->pdf_path) }}"
                            download
                            class="text-blue-600 hover:underline"
                            title="ISO 9001"
                          >
                            <i class="fas fa-download"></i>
                          </a>
                        @else
                          <span class="text-gray-400 italic">No File</span>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
            <!-- ISO 45001 row -->
            <tr>
              <td class="py-4 px-8 flex items-center space-x-3 justify-center border border-transparent">
                <button aria-label="Toggle ISO 45001 details" class="text-gray-600 text-lg leading-none" id="iso45001-toggle">
                  <i class="fas fa-chevron-down" id="iso45001-icon"></i>
                </button>
                <span>ISO 45001</span>
              </td>
              <td class="py-4 px-6 text-center font-semibold align-middle">14/6/2025</td>
              <td class="py-4 px-6 text-center font-normal align-middle text-2xl text-gray-700">
                <button aria-label="Lihat Dokumen" title="Lihat Dokumen" class="text-gray-700">
                  <i class="fas fa-file-alt"></i>
                </button>
              </td>
            </tr>
            <tr class="collapsible-content hidden" id="iso45001-details-row" aria-hidden="true">
              <td class="px-8 pb-6" colspan="4">
                <div class="border border-gray-300 rounded-lg p-4 overflow-y-auto max-h-40" style="scrollbar-width: thin;">
                  <table class="w-full text-sm text-left text-gray-900 inner-table">
                    <thead>
                      <tr class="border-b border-gray-300 font-semibold">
                        <th>No Sertifikat</th>
                        <th>Branch</th>
                        <th>Tanggal Berlaku</th>
                        <th>Tanggal Expired</th>
                        <th>Dokumen</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($iso45001Certificates as $cert)
                      <tr>
                        <td class="py-1 px-3 font-normal cursor-pointer">{{ $cert->no_certification }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->branch }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->start_date }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->expired_date }}</td>
                      <td class="py-1 px-3 font-normal text-center">
                        @if ($cert->pdf_path)
                          <a
                            href="{{ asset('storage/' . $cert->pdf_path) }}"
                            download
                            class="text-blue-600 hover:underline"
                            title="ISO 45001"
                          >
                            <i class="fas fa-download"></i>
                          </a>
                        @else
                          <span class="text-gray-400 italic">No File</span>
                        @endif
                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
            <!-- ISO 14001 row -->
            <tr>
              <td class="py-4 px-8 flex items-center space-x-3 justify-center border border-transparent">
                <button aria-label="Toggle ISO 14001 details" class="text-gray-600 text-lg leading-none" id="iso14001-toggle">
                  <i class="fas fa-chevron-down" id="iso14001-icon"></i>
                </button>
                <span>ISO 14001</span>
              </td>
              <td class="py-4 px-6 text-center font-semibold align-middle">20/12/2026</td>
              <td class="py-4 px-6 text-center font-normal align-middle text-2xl text-gray-700">
                <button aria-label="Lihat Dokumen" title="Lihat Dokumen" class="text-gray-700">
                  <i class="fas fa-file-alt"></i>
                </button>
              </td>
            </tr>
            <tr class="collapsible-content hidden" id="iso14001-details-row" aria-hidden="true">
              <td class="px-8 pb-6" colspan="4">
                <div class="border border-gray-300 rounded-lg p-4 overflow-y-auto max-h-40" style="scrollbar-width: thin;">
                  <table class="w-full text-sm text-left text-gray-900 inner-table">
                    <thead>
                      <tr class="border-b border-gray-300 font-semibold">
                        <th>No Sertifikat</th>
                        <th>Branch</th>
                        <th>Tanggal Berlaku</th>
                        <th>Tanggal Expired</th>
                        <th>Dokumen</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($iso14001Certificates as $cert)
                      <tr>
                        <td class="py-1 px-3 font-normal cursor-pointer">{{ $cert->no_certification }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->branch }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->start_date }}</td>
                        <td class="py-1 px-3 font-normal">{{ $cert->expired_date }}</td>
                      <td class="py-1 px-3 font-normal text-center">
                        @if ($cert->pdf_path)
                          <a
                            href="{{ asset('storage/' . $cert->pdf_path) }}"
                            download
                            class="text-blue-600 hover:underline"
                            title="Download Dokumen"
                          >
                            <i class="fas fa-download"></i>
                          </a>
                        @else
                          <span class="text-gray-400 italic">No File</span>
                        @endif
                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <script>
    // Helper function to toggle collapsible rows with smooth slide animation
    function toggleCollapsible(button, icon, contentRow) {
      if (contentRow.classList.contains("hidden")) {
        // Show content
        contentRow.classList.remove("hidden");
        // Allow next frame for transition
        requestAnimationFrame(() => {
          contentRow.classList.add("open");
        });
        icon.classList.remove("fa-chevron-down");
        icon.classList.add("fa-chevron-up");
      } else {
        // Hide content
        contentRow.classList.remove("open");
        // Wait for transition to finish before hiding completely
        contentRow.addEventListener(
          "transitionend",
          function handler() {
            contentRow.classList.add("hidden");
            contentRow.removeEventListener("transitionend", handler);
          },
          { once: true }
        );
        icon.classList.remove("fa-chevron-up");
        icon.classList.add("fa-chevron-down");
      }
    }

    // ISPS Code toggle
    const ispsToggleBtn = document.getElementById("isps-toggle");
    const ispsIcon = document.getElementById("isps-icon");
    const ispsDetailsRow = document.getElementById("isps-details-row");

    ispsToggleBtn.addEventListener("click", () => {
      toggleCollapsible(ispsToggleBtn, ispsIcon, ispsDetailsRow);
    });

    // ISO 9001 toggle
    const iso9001ToggleBtn = document.getElementById("iso9001-toggle");
    const iso9001Icon = document.getElementById("iso9001-icon");
    const iso9001DetailsRow = document.getElementById("iso9001-details-row");

    iso9001ToggleBtn.addEventListener("click", () => {
      toggleCollapsible(iso9001ToggleBtn, iso9001Icon, iso9001DetailsRow);
    });

    // ISO 45001 toggle
    const iso4501ToggleBtn = document.getElementById("iso45001-toggle");
    const iso4501Icon = document.getElementById("iso45001-icon");
    const iso4501DetailsRow = document.getElementById("iso45001-details-row");

    iso4501ToggleBtn.addEventListener("click", () => {
      toggleCollapsible(iso4501ToggleBtn, iso4501Icon, iso4501DetailsRow);
    });

    // ISO 14001 toggle
    const iso14001ToggleBtn = document.getElementById("iso14001-toggle");
    const iso14001Icon = document.getElementById("iso14001-icon");
    const iso14001DetailsRow = document.getElementById("iso14001-details-row");

    iso14001ToggleBtn.addEventListener("click", () => {
      toggleCollapsible(iso14001ToggleBtn, iso14001Icon, iso14001DetailsRow);
    });

  </script>
</body>
</html>
