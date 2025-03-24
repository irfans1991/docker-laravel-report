export const getInitials = (name) => {
    if (!name) return "?"; // Default for empty names
    return name
      .split(" ") // Split by space
      .map((n) => n[0]) // Get first letter of each word
      .join("") // Join initials
      .toUpperCase(); // Convert to uppercase
  };