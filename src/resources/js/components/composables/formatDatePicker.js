// Helper: format ke YYYY-MM-DD dengan timezone Asia/Makassar
export function formatDateToMakassar(date) {
    if (!date) return null;
    // Gunakan Intl.DateTimeFormat untuk timezone Makassar
    const options = { timeZone: "Asia/Makassar", year: "numeric", month: "2-digit", day: "2-digit" };
    const parts = new Intl.DateTimeFormat("en-CA", options).formatToParts(date);

    const year = parts.find(p => p.type === "year").value;
    const month = parts.find(p => p.type === "month").value;
    const day = parts.find(p => p.type === "day").value;

    return `${year}-${month}-${day}`;
}