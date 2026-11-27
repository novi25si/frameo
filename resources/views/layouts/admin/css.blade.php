<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    body {
        background-color: #fffaf5;
        color: #362614;
    }

    /* Navbar Cokelat Gelap */
    .navbar {
        background-color: #362614;
        padding: 18px 10%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #ffffff;
    }

    .logo {
        font-size: 20px;
        font-weight: 800;
        letter-spacing: 0.5px;
        text-decoration: none;
        color: #ffffff;
    }

    .nav-links {
        display: flex;
        gap: 28px;
    }

    .nav-links a {
        color: #e2d5c8;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: 0.2s;
    }

    .nav-links a:hover,
    .nav-links a.active {
        color: #ff7300;
        font-weight: 700;
    }

    /* Kontainer Utama */
    .container {
        max-width: 1060px;
        margin: 36px auto;
        padding: 0 24px;
    }

    /* Header Halaman */
    .page-header {
        margin-bottom: 28px;
    }

    .page-title {
        font-size: 26px;
        font-weight: 800;
        color: #362614;
        margin-bottom: 6px;
        text-transform: uppercase;
    }

    .page-subtitle {
        font-size: 14.5px;
        color: #78716c;
    }

    /* --- HALAMAN PAKET FOTO --- */
    .paket-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .paket-row {
        background-color: #ffffff;
        border: 1.5px solid #fed7aa;
        border-radius: 14px;
        padding: 24px 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        position: relative;
        transition: all 0.25s ease;
    }

    .paket-row:hover {
        transform: translateY(-4px);
        border-color: #ff7300;
        box-shadow: 0 12px 24px rgba(255, 115, 0, 0.12);
    }

    .paket-row.popular {
        border: 2px solid #ff7300;
        background: linear-gradient(to right, #ffffff 70%, #fff7ed 100%);
    }

    .badge-popular {
        position: absolute;
        top: -12px;
        right: 28px;
        background-color: #ff7300;
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.8px;
        padding: 4px 12px;
        border-radius: 20px;
        text-transform: uppercase;
        box-shadow: 0 4px 10px rgba(255, 115, 0, 0.25);
    }

    .paket-thumb {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #ffedd5 0%, #fed7aa 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ea580c;
        flex-shrink: 0;
    }

    .paket-detail {
        flex: 1;
    }

    .paket-header-info {
        display: flex;
        align-items: baseline;
        gap: 12px;
        margin-bottom: 10px;
    }

    .paket-detail h2 {
        font-size: 20px;
        font-weight: 800;
        color: #362614;
    }

    .paket-detail .price {
        font-size: 18px;
        font-weight: 800;
        color: #ff7300;
    }

    .feature-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tag {
        background-color: #fffaf5;
        border: 1px solid #fed7aa;
        color: #7c2d12;
        font-size: 12.5px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 6px;
    }

    .btn-teal {
        display: inline-block;
        background-color: #ff7300;
        color: #ffffff;
        border: none;
        border-radius: 8px;
        padding: 13px 36px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        flex-shrink: 0;
        transition: background-color 0.2s, transform 0.1s;
    }

    .btn-teal:hover {
        background-color: #ea580c;
    }

    .addon-box {
        margin-top: 32px;
        background-color: #ffedd5;
        border: 1px dashed #fb923c;
        border-radius: 12px;
        padding: 18px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
    }

    .addon-title {
        font-size: 14px;
        font-weight: 800;
        color: #7c2d12;
        text-transform: uppercase;
    }

    .addon-items {
        font-size: 13.5px;
        color: #362614;
    }

    /* --- HALAMAN RESERVASI & PEMBAYARAN --- */
    .booking-layout {
        display: grid;
        grid-template-columns: 1.6fr 1fr;
        gap: 24px;
        align-items: start;
    }

    .card {
        background-color: #ffffff;
        border: 1px solid #fed7aa;
        border-radius: 16px;
        padding: 28px;
        box-shadow: 0 4px 12px rgba(54, 38, 20, 0.04);
    }

    .step-title {
        font-size: 14px;
        font-weight: 700;
        color: #362614;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .step-badge {
        background-color: #ffedd5;
        color: #ff7300;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 800;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-control {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #fed7aa;
        border-radius: 10px;
        font-size: 14px;
        color: #362614;
        transition: 0.2s;
    }

    .form-control:focus {
        outline: none;
        border-color: #ff7300;
        box-shadow: 0 0 0 3px rgba(255, 115, 0, 0.14);
    }

    .paket-options {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .paket-option input[type="radio"] {
        display: none;
    }

    .paket-box {
        border: 1.5px solid #fed7aa;
        border-radius: 12px;
        padding: 14px;
        cursor: pointer;
        transition: all 0.2s;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .paket-box:hover {
        border-color: #ff7300;
        background-color: #fffaf5;
    }

    .paket-option input[type="radio"]:checked+.paket-box {
        border-color: #ff7300;
        background-color: #ffedd5;
    }

    .paket-name {
        font-weight: 800;
        font-size: 15px;
        color: #362614;
        margin-bottom: 4px;
    }

    .paket-price {
        font-weight: 700;
        font-size: 13.5px;
        color: #ff7300;
        margin-bottom: 6px;
    }

    .paket-meta {
        font-size: 11.5px;
        color: #78716c;
        line-height: 1.4;
    }

    .payment-detail-box {
        margin-top: 12px;
        background-color: #fffaf5;
        border: 1px dashed #ff7300;
        border-radius: 10px;
        padding: 12px 14px;
        font-size: 12.5px;
        color: #362614;
        line-height: 1.5;
    }

    .time-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    .time-option input[type="radio"] {
        display: none;
    }

    .time-slot {
        display: block;
        text-align: center;
        padding: 10px 8px;
        border: 1.5px solid #fed7aa;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #362614;
        cursor: pointer;
        transition: 0.2s;
    }

    .time-slot:hover {
        border-color: #ff7300;
    }

    .time-option input[type="radio"]:checked+.time-slot {
        background-color: #ff7300;
        border-color: #ff7300;
        color: #ffffff;
    }

    .summary-card {
        background-color: #362614;
        color: #ffffff;
        border-radius: 16px;
        padding: 26px;
        position: sticky;
        top: 24px;
    }

    .summary-title {
        font-size: 16px;
        font-weight: 800;
        letter-spacing: 0.5px;
        padding-bottom: 14px;
        border-bottom: 1px solid #573d20;
        margin-bottom: 18px;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        font-size: 13.5px;
        margin-bottom: 12px;
        color: #e2d5c8;
    }

    .summary-row strong {
        color: #ffffff;
        font-weight: 600;
    }

    .summary-total {
        margin-top: 18px;
        padding-top: 16px;
        border-top: 1px dashed #75532c;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .summary-total span {
        font-size: 13px;
        color: #e2d5c8;
    }

    .summary-total .total-price {
        font-size: 22px;
        font-weight: 800;
        color: #ff7300;
    }

    .info-note {
        background-color: rgba(255, 115, 0, 0.15);
        border: 1px solid rgba(255, 115, 0, 0.4);
        color: #fed7aa;
        padding: 12px 14px;
        border-radius: 10px;
        font-size: 12px;
        line-height: 1.5;
        margin: 20px 0;
    }

    .btn-submit {
        width: 100%;
        background-color: #ff7300;
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 14px;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .btn-submit:hover {
        background-color: #ea580c;
    }

    @media (max-width: 820px) {
        .booking-layout {
            grid-template-columns: 1fr;
        }

        .paket-options,
        .paket-row {
            grid-template-columns: 1fr;
            flex-direction: column;
            align-items: flex-start;
        }

        .time-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .paket-thumb,
        .btn-teal {
            width: 100%;
        }
    }

    /* --- DETAIL QRIS, REKENING & UPLOAD BUKTI --- */
    .qris-box {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 12px;
    }

    .qris-img {
        width: 120px;
        height: 120px;
        background: #ffffff;
        padding: 8px;
        border: 1.5px solid #fed7aa;
        border-radius: 10px;
        flex-shrink: 0;
    }

    .rek-box {
        background: #ffffff;
        border: 1.5px solid #fed7aa;
        border-radius: 10px;
        padding: 12px 14px;
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .rek-number {
        font-size: 16px;
        font-weight: 800;
        color: #ff7300;
        letter-spacing: 0.5px;
    }

    .btn-copy {
        background-color: #362614;
        color: #ffffff;
        border: none;
        border-radius: 6px;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
    }

    .upload-area {
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px dashed #fed7aa;
    }

    .upload-area label {
        display: block;
        font-size: 12.5px;
        font-weight: 700;
        color: #362614;
        margin-bottom: 6px;
    }

    .file-input {
        width: 100%;
        font-size: 12.5px;
        padding: 8px;
        background: #ffffff;
        border: 1.5px solid #fed7aa;
        border-radius: 8px;
        color: #362614;
    }

    /* --- TOMBOL UPLOAD BUKTI KUSTOM --- */
    .custom-file-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #ffffff;
        border: 1.5px solid #fed7aa;
        border-radius: 8px;
        padding: 8px 12px;
    }

    .btn-upload-custom {
        background-color: #ff7300;
        color: #ffffff;
        padding: 7px 14px;
        border-radius: 6px;
        font-size: 12.5px;
        font-weight: 700;
        cursor: pointer;
        margin-bottom: 0 !important;
        white-space: nowrap;
        transition: background-color 0.2s;
    }

    .btn-upload-custom:hover {
        background-color: #ea580c;
    }

    .file-name-text {
        font-size: 12.5px;
        color: #78716c;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* --- HALAMAN STATUS RESERVASI --- */
    .progress-tracker {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 24px;
    }

    .progress-step {
        background-color: #ffffff;
        border: 1.5px solid #fed7aa;
        border-radius: 10px;
        padding: 12px 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        font-weight: 700;
        color: #78716c;
    }

    .progress-step.done {
        border-color: #ff7300;
        background-color: #fff7ed;
        color: #362614;
    }

    .progress-step.active {
        border-color: #f59e0b;
        background-color: #fffbeb;
        color: #b45309;
    }

    .step-dot {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #fed7aa;
        color: #362614;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 800;
        flex-shrink: 0;
    }

    .progress-step.done .step-dot {
        background-color: #ff7300;
        color: #ffffff;
    }

    .progress-step.active .step-dot {
        background-color: #f59e0b;
        color: #ffffff;
    }

    .status-card {
        background-color: #ffedd5;
        border: 1.5px solid #fed7aa;
        border-radius: 14px;
        padding: 24px 28px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .booking-code {
        font-size: 19px;
        font-weight: 800;
        color: #362614;
        margin-bottom: 6px;
    }

    .booking-meta {
        font-size: 14px;
        color: #78716c;
    }

    .badge-status {
        background-color: #f59e0b;
        color: #ffffff;
        padding: 10px 24px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .payment-card {
        background-color: #ffffff;
        border: 1.5px solid #fed7aa;
        border-radius: 14px;
        padding: 24px 28px;
        margin-bottom: 28px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 24px;
        flex-wrap: wrap;
    }

    .payment-card h2 {
        font-size: 16px;
        font-weight: 800;
        color: #362614;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .payment-card p {
        font-size: 14px;
        color: #78716c;
        margin-bottom: 8px;
    }

    .payment-card p:last-child {
        margin-bottom: 0;
    }

    .proof-box {
        background-color: #fffaf5;
        border: 1px dashed #ff7300;
        border-radius: 10px;
        padding: 12px;
        text-align: center;
    }

    .proof-box span {
        display: block;
        font-size: 12px;
        font-weight: 700;
        color: #362614;
        margin-bottom: 8px;
    }

    .proof-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #fed7aa;
    }

    .action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .btn-outline {
        display: inline-block;
        background-color: #ffffff;
        color: #362614;
        border: 1.5px solid #362614;
        border-radius: 8px;
        padding: 12px 26px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline:hover {
        background-color: #362614;
        color: #ffffff;
    }

    @media (max-width: 640px) {
        .progress-tracker {
            grid-template-columns: 1fr;
        }

        .status-card {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }

        .btn-teal,
        .btn-outline {
            width: 100%;
            text-align: center;
        }
    }
</style>
